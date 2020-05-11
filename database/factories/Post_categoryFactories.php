<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post_category::class, function (Faker $faker) {
    return [
        "category_name" => $faker->sentence(4),

    ];
});
