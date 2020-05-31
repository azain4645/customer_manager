<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'address'=> $faker->address,
        'email'=> $faker->unique()->email,
        'gender'=> $faker->randomElement(['0','1']),
        'tel'=>$faker->phoneNumber,
        'comment'=>$faker->realText(200),

    ];
});
