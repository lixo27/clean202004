<?php

namespace Clean;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(
    \Clean\Domain\Customers\CustomerModel::class,
    function ( \Faker\Generator $faker ) {
        return [
            'created_at' => now(),
            'updated_at' => now()->addDay(),
            'name' => $faker->name,
        ];
    }
);
