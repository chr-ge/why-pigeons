<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
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

        Menu::create(['restaurant_id' => '3','name' => '8 PIECE BUCKET','description' => '8 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken.','image' => 'uploads/menu/3/ww4A1m7z4DN2eLpARCuyEowFzEHTfI4GyAeRorUY.jpeg','category_id' => 9,'price' => 12.99]);
        Menu::create(['restaurant_id' => '3','name' => '12 PIECE BUCKET','description' => '12 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken.','image' => 'uploads/menu/3/Vuzm26jNqFxh1lDwKbwj1abGpqJAlHcf0MsdyjLB.jpeg','category_id' => 9,'price' => 15.99]);
        Menu::create(['restaurant_id' => '3','name' => 'FRIES','description' => 'Crisp, golden fries.','image' => 'uploads/menu/3/nWy6gMOCX5I78wcEeesYbm0UaXJZI1qQA8H9pEfT.jpeg','category_id' => 11,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'POUTINE','description' => 'KFC\'s take on a Canadian classic. Crisp golden fries, cheese curds and gravy.','image' => 'uploads/menu/3/UGi35EcO6SBxcJ95LveFuCpSGyzTWKlz6BE7kk3p.jpeg','category_id' => 11,'price' => 5.64]);
        Menu::create(['restaurant_id' => '3','name' => 'HOMESTYLE COLESLAW','description' => 'Homestyle coleslaw with our sweet vinaigrette.','image' => 'uploads/menu/3/OtGm4fc5Y3LIqBWtyIuE2DzvPesXCQYroUQuUu1q.jpeg','category_id' => 10,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'STRAWERRY SWIRL CHEESECAKE','description' => 'Indulge in our creamy Strawberry Swirl cheesecake.','image' => 'uploads/menu/3/NqDmnf27Dr0TvANwIuSIHK1eF1vZk3AqCHXEVVeG.jpeg','category_id' => 5,'price' => 4.66]);

        Menu::create(['restaurant_id' => '4','name' => 'Inspiration','description' => 'Spring mix, cucumbers, sun-dried cherry tomatoes, Kalamata olives, Balsamic vinaigrette','image' => '','category_id' => 10,'price' => 12.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Greek','description' => 'imported Dodoni Greek feta, cucumbers, red onions, cherry tomatoes, olive tapenade, Greek oregano, olive oil','image' => '','category_id' => 10,'price' => 14.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Margherita','description' => 'Fior di latte, basil','image' => '','category_id' => 14,'price' => 16.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Californian','description' => 'arugula, sun-dried tomatoes, goat cheese, mozzarella','image' => '','category_id' => 14,'price' => 18.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Homemade lasagna','description' => 'meat sauce, cream, mozzarella','image' => '','category_id' => 17,'price' => 20.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Linguine with seafood','description' => 'tomato sauce, shrimp, scallops, clams, mussels, shallots','image' => '','category_id' => 17,'price' => 26.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Baklava cheesecake','description' => 'Creamy cheesecake filled and topped with chunks of baklava.','image' => '','category_id' => 5,'price' => 8.00]);

        Menu::create(['restaurant_id' => '5','name' => 'Beyond Meatball','description' => 'Our Beyond Meatball sub is a saucy classic featuring the tasty plant-based Beyond Meatball.','image' => 'uploads/menu/5/64f8yKnQHj0YLCT0klezcyof8nDAT0rgzV4hVF5h.jpeg','category_id' => 19,'price' => 6.45]);
        Menu::create(['restaurant_id' => '5','name' => 'Cold Cut Combo','description' => 'Delicious deli meats, topped with crisp vegetables','image' => 'uploads/menu/5/TvIOo8nos7tEU4VD9hDARScN1bulrvL1OqC6kxtm.jpeg','category_id' => 19,'price' => 5.99]);
        Menu::create(['restaurant_id' => '5','name' => 'Pizza Sub Melt','description' => 'The Italian sandwich par excellence','image' => 'uploads/menu/5/lLiOPrQP0cysvc8H89RLQ0HtVN4rzGzfGODI4nod.jpeg','category_id' => 19,'price' => 5.97]);
        Menu::create(['restaurant_id' => '5','name' => 'Tuna','description' => 'Made with flaked tuna, mixed with mayo','image' => 'uploads/menu/5/QqQ79SBzkRrZaZ9vhJiJlXw4kdOQ87MKKJd7tFMp.jpeg','category_id' => 19,'price' => 6.54]);
        Menu::create(['restaurant_id' => '5','name' => 'Cookies','description' => 'Tender and moist, it is the perfect way to complement your meal.','image' => 'uploads/menu/5/hX1g4yuf7VbJJ5K6yLMuU1c6jYj8faFOMLIawBr0.jpeg','category_id' => 5,'price' => 2.05]);

        Menu::create(['restaurant_id' => '9','name' => 'Shrimp Tempura','description' => '(1pc) Shrimp tempura, soy sauce, potato, daikon radish, sesame oil','image' => 'uploads/menu/9/29_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 0.69]);
        Menu::create(['restaurant_id' => '9','name' => 'Takoyaki','description' => '(1pc) Minced or diced octopus, tempura scraps, pickled ginger and green onion','image' => 'uploads/menu/9/07_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 0.69]);
        Menu::create(['restaurant_id' => '9','name' => 'Yakitori','description' => '(1pc) Grilled chicken on skewers with savory-sweet sauce','image' => 'uploads/menu/9/03_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 1.29]);
        Menu::create(['restaurant_id' => '9','name' => 'Tempura Platter','description' => '(8pcs) Zucchini tempura, pumpkin tempura, sweet potato tempura, eggplant tempura, soy sauce, potato, daikon radish, sesame oil','image' => 'uploads/menu/9/05_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 8.99]);
        Menu::create(['restaurant_id' => '9','name' => 'Sashimi Platter','description' => '(8pcs) Salmon, mackerel, squid, oil fish, flying fish caviar, imitation crab, sweet tofu, octopus','image' => 'uploads/menu/9/01_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 8.99]);

        Menu::create(['restaurant_id' => '10','name' => 'Cheese Cake','description' => 'Strawberry cheese cake','image' => 'uploads/menu/10/menu-images_500x281-cheese-cake_en.jpg','category_id' => 5,'price' => 2.00]);
        Menu::create(['restaurant_id' => '10','name' => 'Smoked Meat Egg Roll','description' => 'Served with plum or honey mustard sauce.','image' => 'uploads/menu/10/home_1950x750-smoked-meat-eggrolls-2_en.jpg','category_id' => 19,'price' => 10.00]);
        Menu::create(['restaurant_id' => '10','name' => 'Smoked Meat Sandwich','description' => 'Our small sandwich served on rye bread with homemade fries, coleslaw and dill.','image' => 'uploads/menu/10/home_1950x750-smoked-meat-sandwich-3_en.jpg','category_id' => 19,'price' => 16.50]);
        Menu::create(['restaurant_id' => '10','name' => 'Carbonera Pasta','description' => '35% cream, butter, egg yolk, topped with smoked meat and shallots.','image' => 'uploads/menu/10/home_1950x750-spaghetti-carbonara_en.jpg','category_id' => 17,'price' => 17.50]);
        Menu::create(['restaurant_id' => '10','name' => 'Hot Dog Poutine','description' => 'Made with our famous gravy, grilled all beef hot dogs','image' => 'uploads/menu/10/home_dunns-banner-poutine_en.jpg','category_id' => 21,'price' => 13.00]);

        Menu::create(['restaurant_id' => '11','name' => 'Scores Combo','description' => '2 miniburgers (topped with bacon, cheese and chipotle sauce), 4 bites of tender General Tao chicken breast fillets and 4 cheese sticks. Served with Scores marinara sauce.','image' => 'uploads/menu/11/COMBO_SCORES.jpg','category_id' => 9,'price' => 14.25]);
        Menu::create(['restaurant_id' => '11','name' => 'Classic Combo','description' => '2 chicken wings, 2 cheese sticks, 2 breaded tender chicken breast fillets and onion rings. Served with 3 sauces: spicy wing, marinara and honey-Dijon.','image' => 'uploads/menu/11/COMBO_CLASSIQUE.jpg','category_id' => 9,'price' => 19.00]);
        Menu::create(['restaurant_id' => '11','name' => 'Hand Tossed Garlic Parmesan Fries','description' => 'Dive into our hand tossed fries with garlic and parmesan.','image' => 'uploads/menu/11/frites_ail_et_parmesan.jpg','category_id' => 11,'price' => 4.95]);

        Menu::create(['restaurant_id' => '12','name' => 'Neapolitan Pizza','description' => 'Tomato sauce and pizza mozzarella cheese.','image' => 'uploads/menu/12/WEB19_35_new_website_pizzas_400x320_8_Napolitaine.png','category_id' => 14,'price' => 12.99]);

        Menu::create(['restaurant_id' => '13','name' => 'Chicken Noodle Soup','description' => 'Pieces of roasted chicken, noodles and fresh vegetables in a soupe.','image' => 'uploads/menu/13/10003@2x.jpg','category_id' => 6,'price' => 4.25]);

        Menu::create(['restaurant_id' => '14','name' => 'Kibeh','description' => 'Lebanese Beef Croquettes.','image' => 'uploads/menu/14/FS-Al-Boustan0543-1024x683.png','category_id' => 22,'price' => 4.25]);
    }
}
