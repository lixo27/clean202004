<?php

use Illuminate\Database\Seeder;

/**
 * Class CustomerSeeder
 */
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        factory( \Clean\Domain\Customers\CustomerModel::class, 10 )->create();
    }
}
