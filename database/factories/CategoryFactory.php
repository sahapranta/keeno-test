<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $num = rand(300, 600);

    return [
        'name' => $faker->word,
        'image_url' => "https://picsum.photos/id/$num/30/30.jpg"
    ];
});
