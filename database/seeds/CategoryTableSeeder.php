<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => '$']);
        Category::create(['name' => '$$']);
        Category::create(['name' => '$$$']);
        Category::create(['name' => 'Breakfast']);
        Category::create(['name' => 'Dessert']);
        Category::create(['name' => 'Soup']);
        Category::create(['name' => 'Italian']);
        Category::create(['name' => 'Greek']);
        Category::create(['name' => 'Chicken']);
        Category::create(['name' => 'Salad']);
        Category::create(['name' => 'Fries']);
        Category::create(['name' => 'Asian']);
        Category::create(['name' => 'Vegan']);
        Category::create(['name' => 'Pizza']);
        Category::create(['name' => 'Sushi']);
        Category::create(['name' => 'Gluten free']);
        Category::create(['name' => 'Pasta']);
        Category::create(['name' => 'Spicy']);
        Category::create(['name' => 'Sandwiches']);
        Category::create(['name' => 'Burgers']);
        Category::create(['name' => 'Grill']);
        Category::create(['name' => 'Shawarma']);
        Category::create(['name' => 'Canadian']);
        Category::create(['name' => 'American']);
        Category::create(['name' => 'Chinese']);
        Category::create(['name' => 'Mexican']);
        Category::create(['name' => 'Indian']);
        Category::create(['name' => 'Fingerfood']);
        Category::create(['name' => 'Beverage']);
    }
}
