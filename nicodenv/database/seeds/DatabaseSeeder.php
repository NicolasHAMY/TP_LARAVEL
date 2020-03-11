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
                    'shop_Article_name' => 'un trux',
                    'shop_Article_description' => 'achetez ma merde',
                    'shop_Article_price' => ('96521.962'),
                ]
            );
    }
}
