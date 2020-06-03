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
            'photo' => 'https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4132.png',
            'price' => 20.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Cheese',
             'description' => 'doubleBeef, tomato, cocktail sauce , cocktailSauce.',
             'photo' => 'https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4160.png',
             'price' => 30.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double',
             'description' => 'doubleBeef,chedderCheese,grilled Onion , cocktailSauce.',
             'photo' => 'https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4114.png',
             'price' => 35.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double Cheese',
             'description' => 'doubleBeef,doubleCheese,chedder Cheese, grilled onion.',
             'photo' => 'https://purepng.com/public/uploads/medium/purepng.com-fast-food-burgerburgerfast-foodhammeatfast-food-burgermc-donaldsburger-king-231519340201mh7zr.png',
             'price' => 40.00
         ]);

         DB::table('products')->insert([
             'name' => 'Italian style',
             'description' => 'beefPatty,fresh mozzarella italian salami, cocktailSauce.',
             'photo' => ' https://www.searchpng.com/wp-content/uploads/2019/01/Burger-Png.png',
             'price' => 43.50
         ]);
         
         DB::table('products')->insert([
             'name' => 'Mozzarella Soft',
             'description' => 'beefpatty,freshmozzarella,tomato, cocktailSauce,onion.',
             'photo' => 'https://images.ctfassets.net/oewsurrg31ok/1ZTQdLxS2Mt7TKOuYGvdmm/bc00f4dca5471d54f7209cc4c8a786b2/2019_Burger_Guacamole_Bacon.png',
             'price' => 40.50
         ]);
         DB::table('products')->insert([
             'name' => ' Blue cheese',
             'description' => 'beefpatty,bluecheese ,cocktail Sauce, onion,cheese.',
             'photo' => 'https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4142.png',
             'price' => 45.00
         ]);
         DB::table('products')->insert([
             'name' => ' Chedder Cheese',
             'description' => 'beefpatty,bacon,cheddarCheese, cocktailSauce, cheese.',
             'photo' => ' https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-6.png',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Swiss Cheese',
             'description' => 'beefpatty,bacon,cheddarcheese, lettuce, onions, chesse.',
             'photo' => ' https://pngimage.net/wp-content/uploads/2018/06/gourmet-burger-png-4.png',
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
             'photo' => 'https://www.freepngimg.com/thumb/burger/6-2-burger-png-image-thumb.png',
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
             'photo' => 'https://pngimg.com/uploads/burger_sandwich/burger_sandwich_PNG4160.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'BBQ Grilled Chicken',
             'description' => 'grilledchicken breast,rucola and barbecue sauce.',
             'photo' => 'https://pluspng.com/img-png/burger-hd-png-burger-png-hd-png-image-556.png',
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
             'photo' => 'https://purepng.com/public/uploads/large/purepng.com-fast-food-burgerburgerfast-foodhammeatfast-food-burgermc-donaldsburger-king-2315193402011tqil.png',
             'price' => 40.00
         ]);
    }
}
