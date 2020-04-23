<?php

namespace Clean;

use Clean\Domain\Sales\SaleModel;
use Illuminate\Database\Seeder;

/**
 * Class SaleSeeder
 *
 * @package Clean
 */
class SaleSeeder extends Seeder
{
    public function run(): void
    {
        factory( SaleModel::class, 2 )->create();
    }
}
