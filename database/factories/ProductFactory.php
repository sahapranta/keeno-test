<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;


function getImage()
{
    $arr = [];
    $number = rand(2, 5);
    for ($i = 0; $i < $number; $i++) {
        $num = rand($number, 300);        
        $arr[] = "https://picsum.photos/id/$num/300/300.jpg";
    }
    return $arr;
}


$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->text(200),
        'images_url' => json_encode(getImage()),
        "is_featured" => rand(0, 1),
        "price" => rand(200, 500),
        "rating" => rand(0, 5),
        "category_id" => Category::pluck('id')->random()
    ];
});
