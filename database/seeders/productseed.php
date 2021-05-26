<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('products')->insert([

       ['name'=>'Oppo Mobile',
         'price'=>'20000',
         'category'=>'Mobile',
         'description'=>'A smartphone with 4gb ram and 64gb memory 45px camera much money is less',
         'gallery'=>'images/oppo.jpge',
     ],

     ['name'=>'LG Rock TV',
     'price'=>'20400',
     'category'=>'TV',
     'description'=>'A smartTV with 4gb ram and wifi and usb support much money is less',
     'gallery'=>'images/lgrokutv.png',
    ],

    ['name'=>'LG fregeter',
    'price'=>'2002',
    'category'=>'fregeter',
    'description'=>'A smartfregeter with support all condation and much money is less',
    'gallery'=>'images/lg_fregeter.jpge',
    ],

    ['name'=>'LG Mobile',
    'price'=>'200',
    'category'=>'mobile',
    'description'=>'A smartphone with 4gb ram and much money is less',
    'gallery'=>'images/rahul.jpg',
   ]
     ]);   
    }
}
