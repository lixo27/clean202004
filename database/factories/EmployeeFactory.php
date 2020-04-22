<?php

namespace Clean;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(
    \Clean\Domain\Employees\EmployeeModel::class,
    function ( \Faker\Generator $faker ) {
        return [
            'created_at' => now(),
            'updated_at' => now()->addDay(),
            'name' => $faker->name,
        ];
    }
);
