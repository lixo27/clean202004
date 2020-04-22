<?php

namespace Clean;

use Clean\Domain\Employees\EmployeeModel;
use Faker\Generator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define( EmployeeModel::class, function ( Generator $faker ) {
    return [
        'created_at' => now(),
        'updated_at' => now()->addDay(),
        'name' => $faker->name,
    ];
} );
