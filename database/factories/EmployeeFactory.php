<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'employee_id' => $faker->randomNumber(8),
        'year' => $faker->numberBetween($min = 10, $max = 99),
        'email' => $faker->email,
        'dept' => $faker->company,
        'start_day' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),  
    ];
});
