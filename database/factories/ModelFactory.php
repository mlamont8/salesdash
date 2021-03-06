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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Sales::class, function (Faker\Generator $faker) {
   

    return [
     
        'user_id' => $faker->numberBetween ($min=1, $max=10),
        'date_sold' => $faker->dateTimeBetween ($startDate='-3 years', $endDate='now',$timezone = date_default_timezone_get()),
		'product' => $faker->randomElement($array = array ('SUPA101','DETA200','PURA100')),       
		'first_name' => $faker->firstName,       
		'last_name' => $faker->lastName,       
		'address' => $faker->address,       
		'phone' => $faker->phoneNumber,       
		'sales_method' => $faker->randomElement($array= array ('Phone','In Person', 'Internet')),       
		'commission' => $faker->randomElement($array= array (32.00,59.00,61.00,85.00)),

    ];
});