<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['restaurant_id' => '2','name' => 'Pepperoni Lover\'s®','description' => 'Double pepperoni and extra pizza mozzarella.','image' => 'uploads/menu/2/gV9esuNv3Pf3Zw7juGZDes7BYncYVQ6oUVo9jZBq.png','category_id' => 14,'price' => 12.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Meat Lover\'s®','description' => 'Pepperoni, Italian sausage, mild sausage, beef topping, ham, bacon crumble and pizza mozzarella.','image' => 'uploads/menu/2/ir8q3adjxX3tYH3e4MxkkmJ5PDEblr9L4HzIptQ1.png','category_id' => 14,'price' => 15.54]);
        Menu::create(['restaurant_id' => '2','name' => 'Canadian','description' => 'Pepperoni, bacon crumble, mushrooms and pizza mozzarella.','image' => 'uploads/menu/2/VbYJ7GltcXNsTV4T983vresoizQNGuTGblGJqvXB.png','category_id' => 14,'price' => 13.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Bbq Chicken','description' => 'Ultimate BBQ sauce, smoked aged cheddar cheese, grilled chicken strips, red onion, and green peppers','image' => 'uploads/menu/2/gAgrju8zs055r8CN2kAzkPLjgiLB5WF09tRQO5M6.png','category_id' => 14,'price' => 13.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Traditional Wings','description' => 'Classic plump and juicy chicken wings tossed in your choice of sauce.','image' => 'uploads/menu/2/I7rOPehJqUeqoHrxq79efR2A4v2KKq6DDIZWDhb7.png','category_id' => 9,'price' => 10.50]);
        Menu::create(['restaurant_id' => '2','name' => 'Boneless Bites','description' => 'Crispy, breaded, 100% white meat chicken breast pieces tossed in your choice of sauce.','image' => 'uploads/menu/2/k3K0Ah8j78Mss1ZGiK7p79fjDvNdoa90jB17ggyG.png','category_id' => 9,'price' => 11.29]);
        Menu::create(['restaurant_id' => '2','name' => 'Chicken Caesar Salad','description' => 'Add even more flavour to your Caesar salad by topping it with tender grilled seasoned chicken breast','image' => 'uploads/menu/2/OFcDdlNvZckVJk4A7VNtFzW1fJhRfkXyNQoK7Yw8.png','category_id' => 10,'price' => 15.99]);

        Menu::create(['restaurant_id' => '3','name' => '8 PIECE BUCKET','description' => '8 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken. The basics done right.','image' => 'uploads/menu/3/ww4A1m7z4DN2eLpARCuyEowFzEHTfI4GyAeRorUY.jpeg','category_id' => 9,'price' => 12.99]);
        Menu::create(['restaurant_id' => '3','name' => '12 PIECE BUCKET','description' => '12 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken. The basics done right.','image' => 'uploads/menu/3/Vuzm26jNqFxh1lDwKbwj1abGpqJAlHcf0MsdyjLB.jpeg','category_id' => 9,'price' => 15.99]);
        Menu::create(['restaurant_id' => '3','name' => 'FRIES','description' => 'Crisp, golden fries.','image' => 'uploads/menu/3/nWy6gMOCX5I78wcEeesYbm0UaXJZI1qQA8H9pEfT.jpeg','category_id' => 11,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'POUTINE','description' => 'KFC\'s take on a Canadian classic. Crisp golden fries, cheese curds and gravy.','image' => 'uploads/menu/3/UGi35EcO6SBxcJ95LveFuCpSGyzTWKlz6BE7kk3p.jpeg','category_id' => 11,'price' => 5.64]);
        Menu::create(['restaurant_id' => '3','name' => 'HOMESTYLE COLESLAW','description' => 'Homestyle coleslaw with our sweet vinaigrette.','image' => 'uploads/menu/3/OtGm4fc5Y3LIqBWtyIuE2DzvPesXCQYroUQuUu1q.jpeg','category_id' => 10,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'STRAWERRY SWIRL CHEESECAKE','description' => 'Indulge in our creamy Strawberry Swirl cheesecake.','image' => 'uploads/menu/3/NqDmnf27Dr0TvANwIuSIHK1eF1vZk3AqCHXEVVeG.jpeg','category_id' => 5,'price' => 4.66]);
    }
}
