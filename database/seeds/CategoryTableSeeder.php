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
        Category::create(['name' => 'Chinese']);
        Category::create(['name' => 'Vegan']);
        Category::create(['name' => 'Pizza']);
        Category::create(['name' => 'Sushi']);
        Category::create(['name' => 'Gluten free']);
        Category::create(['name' => 'Pasta']);
        Category::create(['name' => 'Spicy']);
    }
}
