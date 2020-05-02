<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Order;
use App\Category;
use App\Restaurant;
use App\RestaurantHours;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\SetOperatingHoursRequest;

class RestaurantController extends Controller
{
    public function index(){
        return view('dashboard.restaurant.dashboard');
    }

    public function management(){
        $categories = Category::pluck('id', 'name');

        return view('dashboard.restaurant.management', compact('categories'));
    }

    public function menu(){
        $menu_items = Menu::where('restaurant_id', auth()->id())->paginate(10);
        return view('dashboard.restaurant.menu', compact('menu_items'));
    }

    public function orders(){
        $orders = Order::where('restaurant_id', auth()->id())->paginate(10);
        return view('dashboard.restaurant.orders', compact('orders'));
    }

    public function newMenuItem(){
        $categories = Category::noPriceRange();
        return view('dashboard.restaurant.newmenuitem', compact('categories'));
    }

    public function editMenuItem(Menu $menu){
        $categories = Category::noPriceRange();
        return view('dashboard.restaurant.editmenuitem', compact('menu','categories'));
    }

    public function orderDetails(Order $order){
        return view('dashboard.restaurant.orderdetails', compact('order'));
    }

    public function createMenuItem(){
        $data = request()->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable|numeric',
            'price' => 'required|numeric|between:0,200'
        ]);

        if(isset($data['image'])){
            $imagePath = $data['image']->store('uploads/menu/'.auth()->user()->id, 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();
        }
        else{
            $imagePath = null;
        }

        Menu::create([
            'restaurant_id' => auth()->user()->id,
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $imagePath,
            'category_id' => $data['category_id'],
            'price' => $data['price']
        ]);

        return redirect()->route('restaurant.menu');
    }

    public function updateMenuItem(Menu $menu){
        $data = request()->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'category_id' => 'nullable|numeric',
            'price' => 'required|numeric|between:0,200'
        ]);

        if(isset($data['image'])){
            if(File::exists(public_path('storage/'.$menu->image))){
                File::delete(public_path('storage/'.$menu->image));
            }
            $imagePath = $data['image']->store('uploads/menu/'.auth()->user()->id, 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();
        }
        else{
            if(isset($menu->image)){
                $imagePath = $menu->image;
            }
            else{
                $imagePath = null;
            }
        }
        Menu::findOrFail($menu->id)->update([
            'restaurant_id' => auth()->user()->id,
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $imagePath,
            'category_id' => $data['category_id'],
            'price' => $data['price']
        ]);

        return redirect()->route('restaurant.menu');
    }

    public function deleteMenuItem(Menu $menu){
        if(File::exists(public_path('storage/'.$menu->image))){
            File::delete(public_path('storage/'.$menu->image));
        }
        Menu::destroy($menu->id);
        return redirect()->back()->with('success', 'Menu Item Deleted Successfully.');
    }

    public function addCategory(){
        $data = request()->validate([
            'category_id' => 'required|numeric'
        ]);

        if(!auth()->user()->categories->contains($data['category_id'])){
            switch ($data['category_id']){
                case 1:
                    auth()->user()->categories()->detach(['2', '3']);
                    auth()->user()->categories()->attach('1');
                    break;
                case 2:
                    auth()->user()->categories()->detach(['1', '3']);
                    auth()->user()->categories()->attach('2');
                    break;
                case 3:
                    auth()->user()->categories()->detach(['1', '2']);
                    auth()->user()->categories()->attach('3');
                    break;
                default:
                    auth()->user()->categories()->attach($data['category_id']);
            }
        }
        else {
            return redirect()->back()->with('error', 'That category already exists for this restaurant');
        }

        return redirect()->back();
    }

    public function setImage(){
        $currentUser = auth()->user();
        $data  = request()->validate([
            'image' => 'required|image'
        ]);

        if(File::exists(public_path('storage/'.$currentUser->image))
            && $currentUser->image !== 'uploads/default.jpeg'){
            File::delete(public_path('storage/'.$currentUser->image));
        }

        $imagePath = $data['image']->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Restaurant::findOrFail($currentUser->id)->update([
            'image' => $imagePath
        ]);

        return redirect()->back();
    }

    public function setOperatingHours(SetOperatingHoursRequest $request){
        $array = $request->validated();

        for($i = 1; $i < 8; $i++){
            RestaurantHours::create([
                'restaurant_id' => auth()->user()->id,
                'day' => $i,
                'open_time' => $array[$i.'-open'],
                'close_time' => $array[$i.'-close'],
            ]);
        }

        return redirect()->back();
    }

    public function updateOperatingHours(SetOperatingHoursRequest $request){
        $array = $request->validated();

        for($i = 1; $i < 8; $i++){
            RestaurantHours::where('restaurant_id', auth()->user()->id)->where('day', $i)->update([
                'open_time' => $array[$i.'-open'],
                'close_time' => $array[$i.'-close'],
            ]);
        }

        return redirect()->back();
    }

    public function completeOrder(Order $order){
        $order->update([
            'status' => 'ready_for_pickup'
        ]);
        return redirect()->back();
    }

    public function cancelOrder(Order $order){
        $order->update([
            'status' => 'cancelled'
        ]);
        return redirect()->back();
    }
}
