<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\TypeUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {

    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'company' => $faker->optional(60)->company,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email
    ];
});
