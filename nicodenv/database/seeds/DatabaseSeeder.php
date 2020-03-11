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
                    'shop_Article_name' => 'nico',
                    'shop_Article_description' => 'lui meme',
                    'shop_Article_price' => ('2'),
                ]
            );
    }
}
