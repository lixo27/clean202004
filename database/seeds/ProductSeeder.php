<?php

namespace Clean;

use Clean\Domain\Products\ProductModel;
use Illuminate\Database\Seeder;

/**
 * Class ProductSeeder
 */
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        factory( ProductModel::class, 2 )->create();
    }
}
