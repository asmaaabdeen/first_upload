<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Classic',
            'description' => 'BeffPatty,chedderCheese,grilled Onion , cocktailSauce.',
            'photo' => 'https://www.mitbit.ca/wp-content/uploads/2019/08/Grilled-Mix-Burger.jpg',
            'price' => 20.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Cheese',
             'description' => 'doubleBeef, tomato, cocktail sauce , cocktailSauce.',
             'photo' => 'https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-4.png',
             'price' => 30.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double',
             'description' => 'doubleBeef,chedderCheese,grilled Onion , cocktailSauce.',
             'photo' => 'https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-6.png',
             'price' => 35.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double Cheese',
             'description' => 'doubleBeef,doubleCheese,chedder Cheese, grilled onion.',
             'photo' => 'https://cdn.vox-cdn.com/thumbor/Ss92dBFYVnimyA1gq0SJVaVx_ts=/0x0:1000x500/1200x800/filters:focal(420x170:580x330)/cdn.vox-cdn.com/uploads/chorus_image/image/59823411/Wegmans_NY_veggie_burger.0.jpg',
             'price' => 40.00
         ]);

         DB::table('products')->insert([
             'name' => 'Italian style',
             'description' => 'beefPatty,fresh mozzarella italian salami, cocktailSauce.',
             'photo' => 'https://pizzativerton.co.uk/wp-content/uploads/2018/12/beef-chicken-burger.jpg',
             'price' => 43.50
         ]);
         DB::table('products')->insert([
             'name' => 'Mozzarella Soft',
             'description' => 'beefpatty,freshmozzarella,tomato, cocktailSauce,onion.',
             'photo' => 'https://www.mitbit.ca/wp-content/uploads/2019/08/Grilled-Mix-Burger.jpg',
             'price' => 40.50
         ]);
         DB::table('products')->insert([
             'name' => ' Blue cheese',
             'description' => 'beefpatty,bluecheese ,cocktail Sauce, onion,cheese.',
             'photo' => 'https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-4.png',
             'price' => 45.00
         ]);
         DB::table('products')->insert([
             'name' => ' Chedder Cheese',
             'description' => 'beefpatty,bacon,cheddarCheese, cocktailSauce, cheese.',
             'photo' => 'https://cdn.vox-cdn.com/thumbor/Ss92dBFYVnimyA1gq0SJVaVx_ts=/0x0:1000x500/1200x800/filters:focal(420x170:580x330)/cdn.vox-cdn.com/uploads/chorus_image/image/59823411/Wegmans_NY_veggie_burger.0.jpg',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Swiss Cheese',
             'description' => 'beefpatty,bacon,cheddarcheese, lettuce, onions, chesse.',
             'photo' => 'https://www.thepacker.com/sites/default/files/sonic-slinger.jpg',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Grilled Chicken',
             'description' => 'grilledchicken breast,cheddar cheese ,white oregano.',
             'photo' => 'https://www.whopper.ie/wp-content/uploads/2015/12/Triple_Whopper_thumb.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Cheese',
             'description' => 'beef patty, cheddar cheese, tomato, onion, red paper.',
             'photo' => 'https://static.timesofisrael.com/jewishstanddev/uploads/2018/08/14-1-F-IF-Burger-0803.jpg',
             'price' => 40.00
         ]);
         DB::table('products')->insert([
             'name' => 'Veggier',
             'description' => 'freshgrilledvegetables,broccoli, tomato,freshcucumber.',
             'photo' => 'https://s3.amazonaws.com/backyardburgers.com/burger.png?mtime=20181025155443',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Mignon Steak',
             'description' => 'mignonsteak,buildyours,tomato, freshcucumber , onion.',
             'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTSeQpyVOZZuOXL4BwbdV0NplhkJLOSEucbc_gR-jKoFpBkuLJW&usqp=CAU',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'BBQ Grilled Chicken',
             'description' => 'grilledchicken breast,rucola and barbecue sauce.',
             'photo' => 'https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-4.png',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Steak',
             'description' => 'cognac,peppersauce,grilledpepper, cheddar cheese.',
             'photo' => 'https://s3.amazonaws.com/heights-photos.bcheights.com/wp-content/uploads/2015/02/05005253/flatpat.png',
             'price' => 35.00
         ]);
         DB::table('products')->insert([
             'name' => 'Tuscan Style',
             'description' => 'tomato,rucola,figs,prosciutto, toma, fresh cucumber.',
             'photo' => 'https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-6.png',
             'price' => 40.00
         ]);
    }
}
