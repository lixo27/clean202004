<?php

namespace Clean;

use Illuminate\Database\Seeder;

/**
 * Class ProductSeeder
 */
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        factory( \Clean\Domain\Products\ProductModel::class, 4 )->create();
    }
}
