<?php

namespace Clean;

use Clean\Domain\Customers\CustomerModel;
use Illuminate\Database\Seeder;

/**
 * Class CustomerSeeder
 *
 * @package Clean
 */
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        factory( CustomerModel::class, 5 )->create();
    }
}
