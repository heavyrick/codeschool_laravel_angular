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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(CsProjeto\Entities\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CsProjeto\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence
    ];
});

$factory->define(CsProjeto\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'client_id' => $faker->numberBetween($min = 1, $max = 10),
        'owner_id' => $faker->numberBetween($min = 1, $max = 10),
        'description' => $faker->sentence,
        'progress' => $faker->word,
        'status' => $faker->word,
        'due_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});