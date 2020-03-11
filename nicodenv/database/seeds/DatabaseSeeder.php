<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            App\shop::create(
                [

                    'shop_Article_name' => 'T-Shirt',
                    'shop_Article_description' => 'T-Shirt 100% Coton',
                    'shop_Article_price' => ('20'),
                ],
                [

                    'shop_Article_name' => 'Tasse',
                    'shop_Article_description' => 'Tasse Nicodenv',
                    'shop_Article_price' => ('10'),
                ]
            );
    }
}




