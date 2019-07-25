<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use App\Company;
use Faker\Generator as Faker;
$factory->define(Employee::class, function (Faker $faker) {
    $companies = Company::all()->pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'company_id'=>$faker->randomElement($companies),
    ];
});
