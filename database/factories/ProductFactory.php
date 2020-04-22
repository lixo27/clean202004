<?php

namespace Clean;

use Clean\Domain\Products\ProductModel;
use Faker\Generator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define( ProductModel::class, function ( Generator $faker ) {
    return [
        'created_at' => now(),
        'updated_at' => now()->addDay(),
        'name' => rtrim( $faker->sentence( 3 ), '.' ),
        'price' => $faker->randomFloat( 2, 10, 99 ),
    ];
} );
