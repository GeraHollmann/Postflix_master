<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        "users_id" => App\User::all()->random()->id,  //ESTO ESTA MAL, averiguar como linkear el id del usuario logueado al otro??
        "id_users2" =>App\User::all()->random()->id

    ];
});
