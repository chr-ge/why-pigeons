<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Pizza',
            'slug' => 'pizza-pizza',
            'email' => 'mark@pizzapizza.com',
            'phone' => '5146549879',
            'password' => '$2y$10$y5kqAI6HM3gLqcWdLVxscOfah1tj8liaBeAF6xcCTb8aJ0ornMvK2',
            'category_id' => 14,
            'image' => 'uploads/k0w0zyVQ8wWcGp7KkplGQkrnTY4sgp9bNA3SIRSb.png',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Pizza Hut',
            'slug' => 'pizza-hut',
            'email' => 'hut@pizzahut.com',
            'phone' => '5149889879',
            'password' => '$2y$10$zHxgRSJJufRX3KhIvqZ7ouWiKPVoaxSMWQYP15a6468yCA1tZtXXG',
            'category_id' => 14,
            'image' => 'uploads/m6h1UxxDsqGZlqq6mSgf6ivgMhWU52gR0iX9R1QS.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'KFC',
            'slug' => 'kfc',
            'email' => 'kfc@gmail.com',
            'phone' => '5146549877',
            'password' => '$2y$10$fNlc/pFipndZ2mNpIKtd5e9GMeqCUzMD6QH7DiyrLDBF6IVkvq116',
            'category_id' => 9,
            'image' => 'uploads/4Pz9iVZMACVKBNf5OrANsPkCBajd4nagGz5CnDhD.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Ottavio',
            'slug' => 'ottavio',
            'email' => 'management@ottavio.com',
            'phone' => '4506549787',
            'password' => '$2y$10$P9VGRpOjLYqH./lsilogA.Zwj6Gi22Qp2e3vlB3E61CKSadcUuDeC',
            'category_id' => 7,
            'image' => 'uploads/n36STHaObnhYc0270RQakTBcb8i4ebrmAPRC2klE.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Subway',
            'slug' => 'subway',
            'email' => 'montreal@subway.com',
            'phone' => '5146449844',
            'password' => '$2y$10$Xw6TNAU9IJaJCWd/nIXDTOWQJjDWPPVE8U1ZMOYNl8zF3qwJCC9lu',
            'category_id' => 19,
            'image' => 'uploads/2PSFYLOJhEKfY6gl8yNNbgd3de2okpx1thi8Xza8.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Thaï Express',
            'slug' => 'thai-express',
            'email' => 'owner@thaiexpress.com',
            'phone' => '5145437766',
            'password' => '$2y$10$w.uvFGk7tRKOBTRS8MlpY.sw6YBSKbXSsSVsYEbdZNRYd5F1oJCnS',
            'category_id' => 12,
            'image' => 'uploads/AXLNLx9GKy3qRbSnLPyopCAiPq2suwck3FKz1Fmz.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Burger King',
            'slug' => 'burger-king',
            'email' => 'king@burgerking.com',
            'phone' => '5141123217',
            'password' => '$2y$10$aPQbkSdt1JLXMFKq.3cSMukW09N4HRxlyIUluKaEcV090Vkw6bz8u',
            'category_id' => 20,
            'image' => 'uploads/vmUhuBOGFo1evapnmuzPLKlvuhCWQE6sxo0RDde5.webp',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'In-N-Out Burger',
            'slug' => 'in-n-out-burger',
            'email' => 'restaurants@in-n-out.com',
            'phone' => '4506339527',
            'password' => '$2y$10$BsHCqBhuPY0kO/od.M7dku6T560J38thfjNrM754HDz98SQs1Jbia',
            'category_id' => 20,
            'image' => 'uploads/vlBjPVQ9UfvVHY6EA3FJVNk93KIWgA0TgWhZSdJM.webp',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Fisshu',
            'slug' => 'fisshu',
            'email' => 'sushi@fisshu.com',
            'phone' => '5143191862',
            'password' => '$2y$10$38qQYwcIgUZG5tDB6e0gaOb6jdxCWQRaT/moYFZPOI3cpM3SIH3g.',
            'category_id' => 15,
            'image' => 'uploads/13_fisshu_400-2018-08-09.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Dunns',
            'slug' => 'dunns',
            'email' => 'info@dunnsfamous.com',
            'phone' => '5143951927',
            'password' => '$2y$10$rIUcWcobxh3FL4g9jcgu.OJCm7k25m2NzdK8hCDk/wWGS/KYA3.j6',
            'category_id' => 19,
            'image' => 'uploads/dunns.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Scores',
            'slug' => 'scores',
            'email' => 'info@scores.ca',
            'phone' => '5143342828',
            'password' => '$2y$10$u2NLY1H0F7Fe2re9kmrCteGe9KBLGWxnKdbsqYEz1NPlZpZnB73ei',
            'category_id' => 9,
            'image' => 'uploads/03_scores--203.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Mikes',
            'slug' => 'mikes',
            'email' => 'toujours@mikes.ca',
            'phone' => '5143319655',
            'password' => '$2y$10$Y0pwAaEudA5S9/DKb6dLwO9xuLtcKiQEYvu4XHujblay.fpmaz7.y',
            'category_id' => 14,
            'image' => 'uploads/WEB20_011_WEB_Pizza_Event_400x300-V1.png',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'St-Hubert',
            'slug' => 'st-hubert',
            'email' => 'restaurant@sthubert.ca',
            'phone' => '5146374417',
            'password' => '$2y$10$6eqPBKmIVU0W2XN.qfqW2ugWf9bdpqCAtNTFRfQccm1Z/Us.c8RGq',
            'category_id' => 9,
            'image' => 'uploads/st-hubert.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Boustan',
            'slug' => 'boustan',
            'email' => 'boustancuisine@gmail.com',
            'phone' => '5148433194',
            'password' => '$2y$10$oGsqXSKshMmQX6kuYBTsDOirBe3qCKGKV1h93KsGsd6aAa4FHNvum',
            'category_id' => 22,
            'image' => 'uploads/236316_05051a420b6ec6b5828e547ad27b7abe541e2b73.jpg_facebook.jpg',
            'active' => 1
        ]);
        Restaurant::create([
        'name' => 'Wendy\'s',
         'slug' => 'wendys',
        'email' => 'wendys@info.com',
        'phone' => '5144814060',
        'password' => '$2y$10$z2pxQRYq3bAl0mmCafZVQOpOU7p/kPQqD3oqgMl.AYMa7eYffO4mG',
        'category_id' => 20,
        'image' => 'uploads/wendys.jpg',
        'active' => 1
        ]);
        Restaurant::create([
            'name' => 'BBQ Tandoori',
            'slug' => 'bbq-tandoori',
            'email' => 'bbq@tandoori.ca',
            'phone' => '5145959000',
            'password' => '$2y$10$I4DgdV42OH/Q1JZveF1.0.XTQeGqfE.ZIytr.y8mDFOGWgf44IZ2O',
            'category_id' => 27,
            'image' => 'uploads/slider2.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Dominos Pizza',
            'slug' => 'dominos-pizza',
            'email' => 'dominospizza@contactus.com',
            'phone' => '514845555',
            'password' => '2y$10$icyS6aCpQyDUyN7TLZM...lgVBhZhEnJ49vf7O7.quXgy6/026jDm',
            'category_id' => 14,
            'image' => 'uploads/img.webp',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'La Shish',
            'slug' => 'la-shish',
            'email' => 'lashishairlie@gmail.com',
            'phone' => '4383337475',
            'password' => '$2y$10$JH2B046x4OvBvKphrWPrVucQNdLu5q9.PpwC7v0mZWFYNGtyVYPxW',
            'category_id' => 22,
            'image' => 'uploads/ac9a668a65ad.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Tacos Frida',
            'slug' => 'tacos-frida',
            'email' => 'tacosfrida@mtl.com',
            'phone' => '5145482061',
            'password' => '$2y$10$wTia67HZWjK4tqOQf4n4u.NVgK3GVJd3h3MbI2itz.56w.stGtmkK',
            'category_id' => 26,
            'image' => 'uploads/02__104-2019-02-21.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'La Belle Province',
            'slug' => 'la-belle-province',
            'email' => 'labellepro@restaurant.ca',
            'phone' => '5143631305',
            'password' => '$2y$10$vx3cXeKYk8WR/N8Rz.Zql.6rskrNiG8tvGwAxh0HTUV4rr2jNqBMe',
            'category_id' => 20,
            'image' => 'uploads/la-belle-province-l-avenir-other-1.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Lafleur',
            'slug' => 'lafleur',
            'email' => 'restolafleur@info.ca',
            'phone' => '4506560005',
            'password' => '$2y$10$MDm1aix50tZXOt9NjyYQbOLA23IcA0VynPYhC.Mvf/qKX.vlXqF.y',
            'category_id' => 20,
            'image' => 'uploads/Lafleur-Poutine-Saucisse.edbc14ff4ab1.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Sushi Plus',
            'slug' => 'sushi-plus',
            'email' => 'sushiplus@mtl.ca',
            'phone' => '5147391888',
            'password' => '$2y$10$XBNHaNyJXdoxqPQxPA7PrOXU7nIuadwGwIteIba/Tu2Enaa1g6qW.',
            'category_id' => 15,
            'image' => 'uploads/party-tray.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Marathon Souvlaki',
            'slug' => 'marathon-souvlaki',
            'email' => 'marathon@souvlaki.ca',
            'phone' => '5147316455',
            'password' => '$2y$10$nMRchj76wU79ZpG.1OBOpeSOAGCHReiijErAkudk32xlrloJZ1jHq',
            'category_id' => 8,
            'image' => 'uploads/marathon-souvlaki.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'O Fuzion',
            'slug' => 'o-fuzion',
            'email' => 'ofuzion@mtl.ca',
            'phone' => '5147271889',
            'password' => '$2y$10$vNTPb04YyBBW7fJlDUIqkuSJSSLHjkoUwqxaiV2Za/pXaNKG22Cke',
            'category_id' => 25,
            'image' => 'uploads/ofuzion1.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Tabla Village',
            'slug' => 'tabla-village',
            'email' => 'tablavillage@gmail.com',
            'phone' => '5145236464',
            'password' => '$2y$10$MUskiQsjfCxpO44hg0fndOD.qMhZSZyPNHkkmYcgYALkQpGhn5Xyi',
            'category_id' => 27,
            'image' => 'uploads/533_f732e4339a8b641df50e707c170ea8e9.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Heirloom Pizzeria',
            'slug' => 'heirloom-pizzeria',
            'email' => 'pizzeriaheirloom@gmail.com',
            'phone' => '5149058211',
            'password' => '$2y$10$VSxnTCvMRlp.m5N11V3La.d0OXQlWVbrOqOow38VoIbuz4rd//M6y',
            'category_id' => 7,
            'image' => 'uploads/pizzeria-heirloom-27.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'La Banquise',
            'slug' => 'la-banquise',
            'email' => 'labanquise@poutine.ca',
            'phone' => '5145252415',
            'password' => '$2y$10$oIy1UW009c6wvUhQNxDvb.7n/xW.QhnNakLXc.MBJ7jTW3ElPZRGq',
            'category_id' => 11,
            'image' => 'uploads/la banquise-1017.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Aux Vivres',
            'slug' => 'aux-vivres',
            'email' => 'info@auxvivres.ca',
            'phone' => '5145431267',
            'password' => '2y$10$ud8Kak2mXZrSkPRP1VfOwO6la/vx4QzOkaS9l42mRE3QrSNXjTGx2',
            'category_id' => 13,
            'image' => 'uploads/smoothies.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Kwizinn Creole',
            'slug' => 'kwizinn-creole',
            'email' => 'kwizinnexpress@info.ca',
            'phone' => '5143796670',
            'password' => '$2y$10$naMfXrmHhq5RKOVYpcyfOuEDrO9o5YiRQ3Lpr7bNJpAApJ1IhlsTa',
            'category_id' => 28,
            'image' => 'uploads/01__299-2019-11-06.jpg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Firegrill',
            'slug' => 'firegrill',
            'email' => 'firegrill@gmail.com',
            'phone' => '5148320222',
            'password' => '$2y$10$CDm7GIkWFkEjOdt4gL3w7uhRVgRsJQwN24hhyl2tLDmApeu.cHHwC',
            'category_id' => 21,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Mandys',
            'slug' => 'mandys',
            'email' => 'salademandys@info.ca',
            'phone' => '5144190779',
            'password' => '$2y$10$iD/Q7DfZ2.fT/a21ZC27d.NXIudNenWSCrveyjOLD0p4vkoAQ/VKC',
            'category_id' => 10,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Cacao 70',
            'slug' => 'cacao-70',
            'email' => 'cacao70@eatery.com',
            'phone' => '5148444442',
            'password' => '$2y$10$gutGnrjso8bzBXaPM0m6zOPDLFOOrmjg.368YRZMnZLYkw7mEcDQS',
            'category_id' => 5,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Peddlers',
            'slug' => 'peddlers',
            'email' => 'peddlers@restaurant.ca',
            'phone' => '5143647204',
            'password' => '$2y$10$8G5MsIwBs1qnVZrK9Z8kI.bV1jtiTo5G589xlwXo4QaZ.W5wJpuJy',
            'category_id' => 4,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Pho Bowl',
            'slug' => 'pho-bowl',
            'email' => 'phobowl@mtl.ca',
            'phone' => '5144825331',
            'password' => '$2y$10$2HwJcJge6kx2wRXR/4.0h.OW0XmWpSQreTocpuRj5GKxQZ1GyqQLK',
            'category_id' => 12,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Dagwoods',
            'slug' => 'dagwoods',
            'email' => 'dagwoods@lasandwicherie.ca',
            'phone' => '5146391212',
            'password' => '$2y$10$WONeAWmFT.alQIZOJ.zBd.diyof33x9JeZJvn8J7X5jQOMExNHVDO',
            'category_id' => 19,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Taco Bell',
            'slug' => 'taco-bell',
            'email' => 'contactus@tacobell.com',
            'phone' => '5143341440',
            'password' => '$2y$10$FhlQaXY4gMq.MoN3gvwzIeLjPhXToyihZ1lFdE8dIoRsb2uuQVYuG',
            'category_id' => 24,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Papi Churros',
            'slug' => 'papi-churros',
            'email' => 'papichurros@restaurant.ca',
            'phone' => '5149995190',
            'password' => '$2y$10$cbzodmoQUQRNY95kYWiVsOgNUD6nOhDzad/Nb4CvoPP5s3pooI3py',
            'category_id' => 5,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Banh Mi 79',
            'slug' => 'banh-mi-79',
            'email' => 'order@banhmi79.com',
            'phone' => '5148407507',
            'password' => '$2y$10$vD1JgLR/gMLVhpCKF6XjAewHhQMd86/jTlHAEqEHBMCzlnCpsWa7u',
            'category_id' => 12,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Rejuice!',
            'slug' => 'rejuice',
            'email' => 'rejuice@info.ca',
            'phone' => '5144846969',
            'password' => '$2y$10$L33pM9RFRFi8wJinkrPjvue/i/v8MI5DOfWvWGdXO0.a0SLYwXCYa',
            'category_id' => 30,
            'image' => 'uploads/',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Grillades Verdun Grill',
            'slug' => 'grillades-verdun-grill',
            'email' => 'grilladesverdun@gmail.com',
            'phone' => '5147662345',
            'password' => '$2y$10$LCwhVWDrG9kApVmd4Wl4ieCu1uJlo.ubbulbxEOhNJzLmSORT6.YO',
            'category_id' => 21,
            'image' => 'uploads/',
            'active' => 1
        ]);
    }
}
