<?php

namespace Clean;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(
    \Clean\Domain\Products\ProductModel::class,
    function ( \Faker\Generator $faker ) {
        return [
            'created_at' => now(),
            'updated_at' => now()->addDay(),
            'name' => rtrim( $faker->sentence( 3 ), '.' ),
            'price' => $faker->randomFloat( 2, 10, 99 ),
        ];
    }
);
