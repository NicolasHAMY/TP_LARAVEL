<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         factory(App\Shop::class,4)->create();

/*
        App\shop::create(
            [
                'shop_Article_name' => 'T-Shirt',
                'shop_Article_description' => 'T-Shirt 100% Coton',
                'shop_Article_price' => ('20'),
            ]);

         App\shop::create(
             [
                 'shop_Article_name' => 'Tasse',
                 'shop_Article_description' => 'Tasse Nicodenv',
                 'shop_Article_price' => ('10'),
             ]);

         App\shop::create(
             [
                 'shop_Article_name' => 'Stickers',
                 'shop_Article_description' => 'Packs stickers Nicodenv',
                 'shop_Article_price' => ('5'),
             ]);

         App\shop::create(
             [
                 'shop_Article_name' => 'Tapis de souris',
                 'shop_Article_description' => 'Tapis de souris grand format 70*100cm',
                 'shop_Article_price' => ('20'),
             ]);
             */
    }
}
