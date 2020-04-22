<?php

namespace Clean;

use Clean\Domain\Customers\CustomerModel;
use Faker\Generator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define( CustomerModel::class, function ( Generator $faker ) {
    return [
        'created_at' => now(),
        'updated_at' => now()->addDay(),
        'name' => $faker->name,
    ];
} );
