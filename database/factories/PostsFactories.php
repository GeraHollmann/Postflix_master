<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        "title_post" => $faker->sentence(10),
        "title_movie" => $faker->sentence(10),
        "image" => $faker->imageUrl($width = 150, $height = 140),
        "description" => $faker->sentence(30),
        "rating" => $faker->numberBetween(1, 10),
        "users_id" => App\User::all()->random()->id,
        "post_categories_id" => App\Post_category::all()->random()->id


    ];
});
