<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {

    return [
        'shop_article_image' => $faker->imageUrl,
        'shop_article_name' => $faker->name,
        'shop_article_description' => $faker->sentence(3),
        'shop_article_price' => $faker->numberBetween(10,100),

    ];


});
