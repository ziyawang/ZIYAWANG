<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

<<<<<<< HEAD
$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'password' =>  bcrypt('secret'),
=======
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
        'remember_token' => str_random(10),
    ];
});
