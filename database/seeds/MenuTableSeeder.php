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
        Menu::create(['restaurant_id' => '1','name' => 'Can Pop','description' => 'Choose from a variety of Coke products. Available in 335 mL cans.','image' => 'uploads/menu/1/Coke_Can.webp','category_id' => 30,'price' => 1.39]);
        Menu::create(['restaurant_id' => '1','name' => 'Bottle Pop','description' => 'Choose from a variety of Coke products. Available in 500 mL bottles.','image' => 'uploads/menu/1/Coke_Bottle.png','category_id' => 30,'price' => 2.29]);
        Menu::create(['restaurant_id' => '1','name' => '8 Jalapeno Poppers','description' => 'These spicy, comfort-food classics are fried to order and stuffed with zesty cream-cheese filling. And, of course, very poppable. Comes in order of 8.','image' => 'uploads/menu/1/JPOP.webp','category_id' => 29,'price' => 5.99]);
        Menu::create(['restaurant_id' => '1','name' => '10 Deep Fried Pickles','description' => 'Yes, you read that right. Deep-fried pickles. This tangy, pub-grub classic is available alongside your fave pizza! Comes in order of 10.','image' => 'uploads/menu/1/DPICK.webp','category_id' => 29,'price' => 5.99]);
        Menu::create(['restaurant_id' => '1','name' => 'Small Box of Fries','description' => 'Feel like fries with that pizza? Not a problem. It\'s all about you!? Enjoy a box of hot, crispy fries cooked in trans-fat free oil.','image' => 'uploads/menu/1/Box-of-Fries.webp','category_id' => 11,'price' => 3.89]);
        Menu::create(['restaurant_id' => '1','name' => 'Buffalo Chicken','description' => 'All the Zing, without the wing - This tangy, spicy pie is made for Game Day. Kick off with buffalo blue cheese sauce, grilled chicken, red onions, fire-roasted red peppers and mozzarella cheese.','image' => 'uploads/menu/1/buffalo-chicken-pizza.webp','category_id' => 14,'price' => 13.29]);
        Menu::create(['restaurant_id' => '1','name' => 'Mediterranean Vegetarian','description' => 'Topped with kalamata olives, broccoli, sun-dried tomatoes, grilled zucchini, red onions, feta cheese and mozzarella cheese. A healthy alternative.','image' => 'uploads/menu/1/medveg.webp','category_id' => 14,'price' => 16.79]);
        Menu::create(['restaurant_id' => '1','name' => 'Gourmet Thin Pesto Amore','description' => 'Fall in love with pesto all over again with this 10" thin crust topped with spinach, red onions, fire roasted red peppers, goat cheese, mozzarella and pesto sauce.','image' => 'uploads/menu/1/SPAGT.webp','category_id' => 14,'price' => 7.29]);
        Menu::create(['restaurant_id' => '1','name' => 'Keto Crust Pizza','description' => 'Get your pizza fix with less carbs! Create your own by selecting any toppings of your choice. Made with certified Keto Uncrust. See About our Food page for nutritional info.','image' => 'uploads/menu/1/SKE.webp','category_id' => 14,'price' => 12.79]);
        Menu::create(['restaurant_id' => '1','name' => 'Chocolate Truffles','description' => 'Rich chocolate covered truffles filled with a decadent chocolate ganache. Box of 15 truffles.','image' => 'uploads/menu/1/TRUF.webp','category_id' => 5,'price' => 5.99]);

        Menu::create(['restaurant_id' => '2','name' => 'Pepperoni Lover\'s®','description' => 'Double pepperoni and extra pizza mozzarella.','image' => 'uploads/menu/2/gV9esuNv3Pf3Zw7juGZDes7BYncYVQ6oUVo9jZBq.png','category_id' => 14,'price' => 12.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Meat Lover\'s®','description' => 'Pepperoni, Italian sausage, mild sausage, beef topping, ham, bacon crumble and pizza mozzarella.','image' => 'uploads/menu/2/ir8q3adjxX3tYH3e4MxkkmJ5PDEblr9L4HzIptQ1.png','category_id' => 14,'price' => 15.54]);
        Menu::create(['restaurant_id' => '2','name' => 'Canadian','description' => 'Pepperoni, bacon crumble, mushrooms and pizza mozzarella.','image' => 'uploads/menu/2/VbYJ7GltcXNsTV4T983vresoizQNGuTGblGJqvXB.png','category_id' => 14,'price' => 13.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Bbq Chicken','description' => 'Ultimate BBQ sauce, smoked aged cheddar cheese, grilled chicken strips, red onion, and green peppers','image' => 'uploads/menu/2/gAgrju8zs055r8CN2kAzkPLjgiLB5WF09tRQO5M6.png','category_id' => 14,'price' => 13.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Traditional Wings','description' => 'Classic plump and juicy chicken wings tossed in your choice of sauce.','image' => 'uploads/menu/2/I7rOPehJqUeqoHrxq79efR2A4v2KKq6DDIZWDhb7.png','category_id' => 9,'price' => 10.50]);
        Menu::create(['restaurant_id' => '2','name' => 'Boneless Bites','description' => 'Crispy, breaded, 100% white meat chicken breast pieces tossed in your choice of sauce.','image' => 'uploads/menu/2/k3K0Ah8j78Mss1ZGiK7p79fjDvNdoa90jB17ggyG.png','category_id' => 9,'price' => 11.29]);
        Menu::create(['restaurant_id' => '2','name' => 'Chicken Caesar Salad','description' => 'Add even more flavour to your Caesar salad by topping it with tender grilled seasoned chicken breast','image' => 'uploads/menu/2/OFcDdlNvZckVJk4A7VNtFzW1fJhRfkXyNQoK7Yw8.png','category_id' => 10,'price' => 15.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Pepsi 2 Litre Bottle','description' => 'The bold, robust, effervescently magic cola.','image' => 'uploads/menu/2/41e7b17d-84c6-4812-b685-a1e3029a35c5.jpg','category_id' => 30,'price' => 3.49]);
        Menu::create(['restaurant_id' => '2','name' => 'The Ultimate Hershey\'s Chipits Cookie','description' => 'Freshly baked. Served warm and gooey. Try it today!','image' => 'uploads/menu/2/99e8bbfd-fb49-412b-a9f7-5ac60183fa5f.jpg','category_id' => 5,'price' => 6.99]);
        Menu::create(['restaurant_id' => '2','name' => 'Creamy Chicken Alfredo','description' => 'Sliced grilled chicken breast tossed with oven-baked rotini in a creamy alfredo sauce. Includes fresh breadsticks.','image' => 'uploads/menu/2/6050d919-cef9-4c61-bb97-bd8468094ffc.jpg','category_id' => 17,'price' => 16.99]);

        Menu::create(['restaurant_id' => '3','name' => '8 PIECE BUCKET','description' => '8 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken.','image' => 'uploads/menu/3/ww4A1m7z4DN2eLpARCuyEowFzEHTfI4GyAeRorUY.jpeg','category_id' => 9,'price' => 12.99]);
        Menu::create(['restaurant_id' => '3','name' => '12 PIECE BUCKET','description' => '12 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken.','image' => 'uploads/menu/3/Vuzm26jNqFxh1lDwKbwj1abGpqJAlHcf0MsdyjLB.jpeg','category_id' => 9,'price' => 15.99]);
        Menu::create(['restaurant_id' => '3','name' => 'FRIES','description' => 'Crisp, golden fries.','image' => 'uploads/menu/3/nWy6gMOCX5I78wcEeesYbm0UaXJZI1qQA8H9pEfT.jpeg','category_id' => 11,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'POUTINE','description' => 'KFC\'s take on a Canadian classic. Crisp golden fries, cheese curds and gravy.','image' => 'uploads/menu/3/UGi35EcO6SBxcJ95LveFuCpSGyzTWKlz6BE7kk3p.jpeg','category_id' => 11,'price' => 5.64]);
        Menu::create(['restaurant_id' => '3','name' => 'HOMESTYLE COLESLAW','description' => 'Homestyle coleslaw with our sweet vinaigrette.','image' => 'uploads/menu/3/OtGm4fc5Y3LIqBWtyIuE2DzvPesXCQYroUQuUu1q.jpeg','category_id' => 10,'price' => 3.54]);
        Menu::create(['restaurant_id' => '3','name' => 'STRAWERRY SWIRL CHEESECAKE','description' => 'Indulge in our creamy Strawberry Swirl cheesecake.','image' => 'uploads/menu/3/NqDmnf27Dr0TvANwIuSIHK1eF1vZk3AqCHXEVVeG.jpeg','category_id' => 5,'price' => 4.66]);
        Menu::create(['restaurant_id' => '3','name' => '25 PIECE PARTY PACK','description' => '25 pieces of our Canadian farm raised and hand-breaded Secret Recipe chicken, 2 large golden fries, large gravy and 3 large homestyle sides of your choice. A feast fit for the hungriest of friends and family.','image' => 'uploads/menu/3/25_Bucket_Feast.jpg','category_id' => 9,'price' => 38.99]);
        Menu::create(['restaurant_id' => '3','name' => 'SANDWICH BUCKET','description' => '2 Double Tender sandwiches and 2 choices of Big Crunch or Zinger sandwiches served with large fries.','image' => 'uploads/menu/3/sandwich_bucket_newfmi.jpg','category_id' => 19,'price' => 26.99]);
        Menu::create(['restaurant_id' => '3','name' => 'GO BUCKET - KENTUCKY FLATBREAD','description' => 'Our flatbread filled with 1 white meat chicken tender hand-breaded in our 11 herds and spices, topped with lettuce and pepper mayo. Served with individual fries. Good to go!','image' => 'uploads/menu/3/GB_K_FlatBread.jpg','category_id' => 29,'price' => 3.49]);
        Menu::create(['restaurant_id' => '3','name' => 'SMALL POPCORN CHICKEN','description' => 'Bite-sized chicken. Big on flavour.','image' => 'uploads/menu/3/s_pop_chk.jpg','category_id' => 29,'price' => 5.99]);

        Menu::create(['restaurant_id' => '4','name' => 'Inspiration','description' => 'Spring mix, cucumbers, sun-dried cherry tomatoes, Kalamata olives, Balsamic vinaigrette','image' => '','category_id' => 10,'price' => 12.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Greek','description' => 'imported Dodoni Greek feta, cucumbers, red onions, cherry tomatoes, olive tapenade, Greek oregano, olive oil','image' => '','category_id' => 10,'price' => 14.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Margherita','description' => 'Fior di latte, basil','image' => '','category_id' => 14,'price' => 16.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Californian','description' => 'arugula, sun-dried tomatoes, goat cheese, mozzarella','image' => '','category_id' => 14,'price' => 18.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Homemade lasagna','description' => 'meat sauce, cream, mozzarella','image' => '','category_id' => 17,'price' => 20.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Linguine with seafood','description' => 'tomato sauce, shrimp, scallops, clams, mussels, shallots','image' => '','category_id' => 17,'price' => 26.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Baklava cheesecake','description' => 'Creamy cheesecake filled and topped with chunks of baklava.','image' => '','category_id' => 5,'price' => 8.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Sicilian','description' => 'Italian sausage, capers, Kalamata olives, red onions, hot peppers, Fior di latte.','image' => '','category_id' => 14,'price' => 20.00]);
        Menu::create(['restaurant_id' => '4','name' => 'Penne Da Vinci','description' => 'Cream, white wine, goat cheese, shallots, arugula, cherry tomatoes.','image' => '','category_id' => 17,'price' => 22.50]);
        Menu::create(['restaurant_id' => '4','name' => 'Chicken Parmigiana','description' => 'Chicken breast, Panko bread crumbs, parmesan, traditional tomato sauce, mozzarella, linguine napoletana.','image' => '','category_id' => 9,'price' => 26.50]);

        Menu::create(['restaurant_id' => '5','name' => 'Beyond Meatball','description' => 'Our Beyond Meatball sub is a saucy classic featuring the tasty plant-based Beyond Meatball.','image' => 'uploads/menu/5/64f8yKnQHj0YLCT0klezcyof8nDAT0rgzV4hVF5h.jpeg','category_id' => 19,'price' => 6.45]);
        Menu::create(['restaurant_id' => '5','name' => 'Cold Cut Combo','description' => 'Delicious deli meats, topped with crisp vegetables','image' => 'uploads/menu/5/TvIOo8nos7tEU4VD9hDARScN1bulrvL1OqC6kxtm.jpeg','category_id' => 19,'price' => 5.99]);
        Menu::create(['restaurant_id' => '5','name' => 'Pizza Sub Melt','description' => 'The Italian sandwich par excellence','image' => 'uploads/menu/5/lLiOPrQP0cysvc8H89RLQ0HtVN4rzGzfGODI4nod.jpeg','category_id' => 19,'price' => 5.97]);
        Menu::create(['restaurant_id' => '5','name' => 'Tuna','description' => 'Made with flaked tuna, mixed with mayo','image' => 'uploads/menu/5/QqQ79SBzkRrZaZ9vhJiJlXw4kdOQ87MKKJd7tFMp.jpeg','category_id' => 19,'price' => 6.54]);
        Menu::create(['restaurant_id' => '5','name' => 'Cookies','description' => 'Tender and moist, it is the perfect way to complement your meal.','image' => 'uploads/menu/5/hX1g4yuf7VbJJ5K6yLMuU1c6jYj8faFOMLIawBr0.jpeg','category_id' => 5,'price' => 2.05]);
        Menu::create(['restaurant_id' => '5','name' => 'Brisk Lemon Iced Tea','description' => 'This is the Brisk® that started it all. The original iced tea with tons of attitude. The one with the bold lemon flavour that kicked iced tea off the back porch. Now that’s Brisk, baby!','image' => 'uploads/menu/5/Subway_BriskLemonIcedTea_234x140_72_RGB.jpg','category_id' => 30,'price' => 1.89]);
        Menu::create(['restaurant_id' => '5','name' => 'Egg and Bacon English Muffin','description' => 'Our Egg and Bacon English Muffin Sandwich will leave you wanting seconds. English muffin filled with tasty bacon, egg and processed white cheddar then toasted just the way you like it.','image' => 'uploads/menu/5/Subway_EnglishMuffinBaconEgg_234x140_72_RGB.jpg','category_id' => 4,'price' => 3.49]);
        Menu::create(['restaurant_id' => '5','name' => 'Black Forest Ham','description' => 'Everything but the bread! Turn any one of your favourite sandwiches into a salad. Add crunch to your meal with lettuce, red onions, tomatoes, cucumbers and much more!','image' => 'uploads/menu/5/Subway_SaladBlackForestHam_234x140_72_RGB.jpg','category_id' => 10,'price' => 7.49]);
        Menu::create(['restaurant_id' => '5','name' => 'Chicken & Bacon Ranch','description' => 'Everything but the bread! Turn any one of your favourite sandwiches into a salad. Add crunch to your meal with lettuce, red onions, tomatoes, cucumbers and much more!','image' => 'uploads/menu/5/Subway_SaladChickenBaconRanch_594x334_72_RGB.jpg','category_id' => 10,'price' => 9.69]);
        Menu::create(['restaurant_id' => '5','name' => 'Tuna Salad','description' => 'Everything but the bread! Turn any one of your favourite sandwiches into a salad. Add crunch to your meal with lettuce, red onions, tomatoes, cucumbers and much more!','image' => 'uploads/menu/5/Subway_SaladTuna_594x334_72_RGB.jpg','category_id' => 10,'price' => 6.89]);

        Menu::create(['restaurant_id' => '6','name' => 'Fried Chicken Dumplings','description' => 'Crispy chicken dumplings served with sweet chili sauce','image' => 'uploads/menu/6/frieddumplings.jpg','category_id' => 29,'price' => 4.00]);
        Menu::create(['restaurant_id' => '6','name' => 'Steamed Chicken Dumplings','description' => 'Chicken wrapped in savoury dough, served with peanut sauce and green onion.','image' => 'uploads/menu/6/appetizers-chickendumplings.jpg','category_id' => 29,'price' => 4.00]);
        Menu::create(['restaurant_id' => '6','name' => 'Spring Roll','description' => 'Lettuce, bean sprouts, carrot, coriander, mint, vermicelli and shrimp wrapped in rice paper and served with peanut sauce','image' => 'uploads/menu/6/appetizers-springroll.jpg','category_id' => 29,'price' => 3.75]);
        Menu::create(['restaurant_id' => '6','name' => 'Imperial Roll','description' => 'Crispy roll filled with vegetables. Enjoy with your choice of Thai Express plum sauce or FS sauce','image' => 'uploads/menu/6/appetizers-imperialroll.jpg','category_id' => 29,'price' => 1.70]);
        Menu::create(['restaurant_id' => '6','name' => 'Mango Salad','description' => 'Mango, lettuce, coriander, shallots, red pepper and mint served with Thai dressing','image' => 'uploads/menu/6/appetizers-mangosalad.jpg','category_id' => 10,'price' => 4.50]);
        Menu::create(['restaurant_id' => '6','name' => 'Thai Soup','description' => 'A fragrant Thai chicken broth filled with rice noodles, bean sprouts, onion, carrot, green onion, coriander, topped with crispy fried red shallot with your choice of Shrimp, Beef, Chicken, Vegetables, Tofu or Fish.','image' => 'uploads/menu/6/soups-thai.jpg','category_id' => 6,'price' => 8.98]);
        Menu::create(['restaurant_id' => '6','name' => 'General Curry','description' => 'Crisp pieces of battered fried chicken with one of the three delicious curries (Red, Green or Yellow) served on steamed rice.','image' => 'uploads/menu/6/curry-general.jpg','category_id' => 31,'price' => 9.88]);
        Menu::create(['restaurant_id' => '6','name' => 'Thai Fried Rice','description' => 'A Thai classic; Fried rice with egg, green onion, carrot, onion, with your choice of Shrimp, Beef, Chicken, Vegetables, Tofu, Fish or Vegan (contains no seafood or animal product). With Pineapple and tomato','image' => 'uploads/menu/6/FriedRice_ThaiFriedRice.jpg','category_id' => 31,'price' => 8.98]);
        Menu::create(['restaurant_id' => '6','name' => 'Pad Thai','description' => 'Thin rice noodles stir-fried with our sweet and sour sauce, egg, bean sprouts, green onion, tofu and salted radish with your choice of Shrimp, Beef, Chicken, Vegetables, Tofu, Fish or Vegan (contains no seafood or animal product).','image' => 'uploads/menu/6/Noodles_PadThai.jpg','category_id' => 32,'price' => 8.98]);
        Menu::create(['restaurant_id' => '6','name' => 'Pad See Ew','description' => 'Broad rice noodles served with our house brand soy sauce, egg and Chinese broccoli with your choice of Shrimp, Beef, Chicken, Vegetables, Tofu, Fish or Vegan* (contains no seafood or animal product).','image' => 'uploads/menu/6/Noodles_PadSeeEw.jpg','category_id' => 32,'price' => 8.98]);

        Menu::create(['restaurant_id' => '7','name' => 'SMARTIES SHAKE','description' => 'For a limited time, indulge in our creamy hand spun Smarties Shake. Velvety Vanilla Soft Serve, Smarties pieces and vanilla sauce are blended to perfection and finished with a sweet whipped topping just for you.','image' => 'uploads/menu/7/02990-32 BK_Web_SmartiesShake_500x540_CR_0.png','category_id' => 5,'price' => 3.49]);
        Menu::create(['restaurant_id' => '7','name' => 'APPLE TURNOVER','description' => 'Our Apple Turnover has a flaky golden crust with a delicious warm apple filling. It\'s the perfect way to finish any meal.','image' => 'uploads/menu/7/Hero-Apple Turnover.png','category_id' => 5,'price' => 3.29]);
        Menu::create(['restaurant_id' => '7','name' => 'JALAPENO CHEESY BITES','description' => 'Wrapped in a crispy coating, packed with jalapeno pieces, and bursting with cheesy goodness. The Jalapeno Cheesy Bites are the perfect snack that will leave you craving more. Get \'em while you can, limited time only.','image' => 'uploads/menu/7/209-41-BKCA_Web_JalapenoCheesyBites_500x540-CR_1.png','category_id' => 29,'price' => 4.99]);
        Menu::create(['restaurant_id' => '7','name' => 'CHICKEN NUGGETS','description' => 'Made with white meat, our bite-sized Chicken Nuggets are tender and juicy on the inside and crispy on the outside. Coated in a homestyle seasoned breading, they are perfect for dipping in any of our delicious dipping sauces.','image' => 'uploads/menu/7/02936-74 BK_Chicken_Nuggets_500x540_CR.png','category_id' => 29,'price' => 5.99]);
        Menu::create(['restaurant_id' => '7','name' => 'FRENCH FRIES','description' => 'More delicious than ever, our signature piping hot, thick cut French Fries are golden on the outside and fluffy on the inside.','image' => 'uploads/menu/7/HERO_0001_French_Fries.png','category_id' => 11,'price' => 2.99]);
        Menu::create(['restaurant_id' => '7','name' => 'POUTINE','description' => 'Try delicious poutine at BURGER KING and enjoy the classic taste of fresh golden fries smothered with cheese curds & piping hot gravy. The flavours melt together to create a truly Canadian favourite.','image' => 'uploads/menu/7/04409-31 DIG Silo Poutine 500x540_CR.png','category_id' => 11,'price' => 6.99]);
        Menu::create(['restaurant_id' => '7','name' => 'SAUSAGE, EGG & CHEESE CROISSAN\'WICH','description' => 'Our grab-and-go Sausage, Egg & Cheese CROISSAN’WICH is piled high with savoury sizzling sausage, eggs, and melted cheese on a toasted, flaky croissant.','image' => 'uploads/menu/7/Detail_Croissanwich_Sausage_egg_cheese.png','category_id' => 4,'price' => 5.99]);
        Menu::create(['restaurant_id' => '7','name' => 'PANCAKES','description' => 'Three warm, fluffy pancakes flavoured with a hint of vanilla and served with syrup.','image' => 'uploads/menu/7/Hero-Pancakes-2_0.png','category_id' => 4,'price' => 4.99]);
        Menu::create(['restaurant_id' => '7','name' => 'ROADHOUSE KING','description' => 'The Roadhouse KING™ Sandwich features two 1/4 lb savory flame-grilled beef patties, topped with 4 half-strips of thick-cut smoked bacon, our signature crispy onion rings, tangy BBQ sauce, American cheese and creamy mayonnaise all on our sesame seed bun.','image' => 'uploads/menu/7/Roadhouse-King-Silo-500x540_CR.png','category_id' => 20,'price' => 9.99]);
        Menu::create(['restaurant_id' => '7','name' => 'BACON & CHEESE WHOPPER','description' => 'A ¼ lb of savory flame-grilled beef topped with thick-cut smoked bacon, melted cheese, ripe tomatoes, fresh lettuce, creamy mayonnaise, ketchup, crunchy pickles, and sliced onions, all on a warm, toasted, sesame seed bun.','image' => 'uploads/menu/7/03299-87 DIG_Silo_Bacon Cheese Whopper_500x540_CR.png','category_id' => 20,'price' => 8.99]);

        Menu::create(['restaurant_id' => '8','name' => 'SHAKES','description' => 'Chocolate, Strawberry or Vanilla made with real ice cream.','image' => 'uploads/menu/8/shakes.jpg','category_id' => 5,'price' => 4.49]);
        Menu::create(['restaurant_id' => '8','name' => 'BEVERAGES','description' => 'Refreshing selections include Coca-Cola, Diet Coke, 7UP, Dr. Pepper, Root Beer, Lemonade, Minute Maid Light Lemonade, Iced Tea, Milk, Coffee and Hot Cocoa.','image' => 'uploads/menu/8/cups.jpg','category_id' => 30,'price' => 2.19]);
        Menu::create(['restaurant_id' => '8','name' => 'FRENCH FRIES','description' => 'Fresh, hand-cut potatoes prepared in 100% sunflower oil.','image' => 'uploads/menu/8/fries.jpg','category_id' => 11,'price' => 3.89]);
        Menu::create(['restaurant_id' => '8','name' => 'HAMBURGER','description' => 'Toasted buns, beef patty, onions, lettuce, sauce spread unchanged since 1948 and tomatoes.','image' => 'uploads/menu/8/hamburger.jpg','category_id' => 20,'price' => 5.39]);
        Menu::create(['restaurant_id' => '8','name' => 'CHEESEBURGER','description' => 'Toasted buns, sliced cheese, beef patty, onions, lettuce, sauce spread unchanged since 1948 and tomatoes.','image' => 'uploads/menu/8/cheeseburger.jpg','category_id' => 20,'price' => 6.29]);
        Menu::create(['restaurant_id' => '8','name' => 'DOUBLE-DOUBLE','description' => 'Toasted buns, 2 cheese slices, 2 beef patties, onions, lettuce, sauce spread unchanged since 1948 and tomatoes.','image' => 'uploads/menu/8/double-double.jpg','category_id' => 20,'price' => 7.49]);
        Menu::create(['restaurant_id' => '8','name' => 'HAMBURGER MEAL','description' => 'Toasted buns, beef patty, onions, lettuce, sauce spread unchanged since 1948 and tomatoes. Served with fried and a beverage.','image' => 'uploads/menu/8/hamburger-meal.jpg','category_id' => 20,'price' => 9.89]);
        Menu::create(['restaurant_id' => '8','name' => 'CHEESEBURGER MEAL','description' => 'Toasted buns, sliced cheese, beef patty, onions, lettuce, sauce spread unchanged since 1948 and tomatoes. Served with fries and a beverage.','image' => 'uploads/menu/8/cheeseburger-meal.jpg','category_id' => 20,'price' => 10.49]);
        Menu::create(['restaurant_id' => '8','name' => 'DOUBLE-DOUBLE MEAL','description' => 'Toasted buns, 2 cheese slices, 2 beef patties, onions, lettuce, sauce spread unchanged since 1948 and tomatoes. Served with fries and a beverage.','image' => 'uploads/menu/8/double-double-meal.jpg','category_id' => 20,'price' => 11.79]);
        Menu::create(['restaurant_id' => '8','name' => 'ANIMAL STYLE FRIES','description' => 'Fresh, hand-cut potatoes prepared in 100% sunflower oil. Served topped with our sauce spread unchanged since 1948.','image' => 'uploads/menu/8/maxresdefault.jpg','category_id' => 11,'price' => 7.29]);

        Menu::create(['restaurant_id' => '9','name' => 'Shrimp Tempura','description' => 'Shrimp tempura, soy sauce, potato, daikon radish, sesame oil. (1pc)','image' => 'uploads/menu/9/29_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 0.69]);
        Menu::create(['restaurant_id' => '9','name' => 'Takoyaki','description' => 'Minced or diced octopus, tempura scraps, pickled ginger and green onion. (1pc)','image' => 'uploads/menu/9/07_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 0.69]);
        Menu::create(['restaurant_id' => '9','name' => 'Yakitori','description' => 'Grilled chicken on skewers with savory-sweet sauce. (1pc)','image' => 'uploads/menu/9/03_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 1.29]);
        Menu::create(['restaurant_id' => '9','name' => 'Tempura Platter','description' => 'Zucchini tempura, pumpkin tempura, sweet potato tempura, eggplant tempura, soy sauce, potato, daikon radish, sesame oil. (8pcs)','image' => 'uploads/menu/9/05_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 8.99]);
        Menu::create(['restaurant_id' => '9','name' => 'Sashimi Platter','description' => 'Salmon, mackerel, squid, oil fish, flying fish caviar, imitation crab, sweet tofu, octopus. (8pcs)','image' => 'uploads/menu/9/01_fisshu_400-2018-08-09.jpg','category_id' => 15,'price' => 8.99]);

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

        Menu::create(['restaurant_id' => '15','name' => '','description' => '','image' => 'uploads/menu/15/','category_id' => 20,'price' => 4.25]);

        Menu::create(['restaurant_id' => '16','name' => '','description' => '','image' => 'uploads/menu/16/','category_id' => 27,'price' => 4.25]);

        Menu::create(['restaurant_id' => '17','name' => '','description' => '','image' => 'uploads/menu/17/','category_id' => 14,'price' => 4.25]);

        Menu::create(['restaurant_id' => '18','name' => '','description' => '','image' => 'uploads/menu/18/','category_id' => 22,'price' => 4.25]);

        Menu::create(['restaurant_id' => '19','name' => '','description' => '','image' => 'uploads/menu/19/','category_id' => 26,'price' => 4.25]);

        Menu::create(['restaurant_id' => '20','name' => '','description' => '','image' => 'uploads/menu/20/','category_id' => 20,'price' => 4.25]);

        Menu::create(['restaurant_id' => '21','name' => '','description' => '','image' => 'uploads/menu/21/','category_id' => 20,'price' => 4.25]);

        Menu::create(['restaurant_id' => '22','name' => '','description' => '','image' => 'uploads/menu/22/','category_id' => 15,'price' => 4.25]);

        Menu::create(['restaurant_id' => '23','name' => '','description' => '','image' => 'uploads/menu/23/','category_id' => 8,'price' => 4.25]);

        Menu::create(['restaurant_id' => '24','name' => '','description' => '','image' => 'uploads/menu/24/','category_id' => 25,'price' => 4.25]);

        Menu::create(['restaurant_id' => '25','name' => '','description' => '','image' => 'uploads/menu/25/','category_id' => 27,'price' => 4.25]);

        Menu::create(['restaurant_id' => '26','name' => '','description' => '','image' => 'uploads/menu/26/','category_id' => 7,'price' => 4.25]);

        Menu::create(['restaurant_id' => '27','name' => '','description' => '','image' => 'uploads/menu/27/','category_id' => 11,'price' => 4.25]);

        Menu::create(['restaurant_id' => '28','name' => '','description' => '','image' => 'uploads/menu/28/','category_id' => 13,'price' => 4.25]);

        Menu::create(['restaurant_id' => '29','name' => '','description' => '','image' => 'uploads/menu/29/','category_id' => 28,'price' => 4.25]);

        Menu::create(['restaurant_id' => '30','name' => '','description' => '','image' => 'uploads/menu/30/','category_id' => 21,'price' => 4.25]);

        Menu::create(['restaurant_id' => '31','name' => '','description' => '','image' => 'uploads/menu/31/','category_id' => 10,'price' => 4.25]);

        Menu::create(['restaurant_id' => '32','name' => '','description' => '','image' => 'uploads/menu/32/','category_id' => 5,'price' => 4.25]);

        Menu::create(['restaurant_id' => '33','name' => '','description' => '','image' => 'uploads/menu/33/','category_id' => 4,'price' => 4.25]);

        Menu::create(['restaurant_id' => '34','name' => '','description' => '','image' => 'uploads/menu/34/','category_id' => 12,'price' => 4.25]);

        Menu::create(['restaurant_id' => '35','name' => '','description' => '','image' => 'uploads/menu/35/','category_id' => 19,'price' => 4.25]);

        Menu::create(['restaurant_id' => '36','name' => '','description' => '','image' => 'uploads/menu/36/','category_id' => 24,'price' => 4.25]);

        Menu::create(['restaurant_id' => '37','name' => '','description' => '','image' => 'uploads/menu/37/','category_id' => 5,'price' => 4.25]);

        Menu::create(['restaurant_id' => '38','name' => '','description' => '','image' => 'uploads/menu/38/','category_id' => 12,'price' => 4.25]);

        Menu::create(['restaurant_id' => '39','name' => '','description' => '','image' => 'uploads/menu/39/','category_id' => 30,'price' => 4.25]);

        Menu::create(['restaurant_id' => '40','name' => '','description' => '','image' => 'uploads/menu/40/','category_id' => 21,'price' => 4.25]);
    }
}
