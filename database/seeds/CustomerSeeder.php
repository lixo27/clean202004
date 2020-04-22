<?php

namespace Clean;

use Clean\Domain\Customers\CustomerModel;
use Illuminate\Database\Seeder;

/**
 * Class CustomerSeeder
 */
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        factory( CustomerModel::class, 5 )->create();
    }
}
