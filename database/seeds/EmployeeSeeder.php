<?php

use Illuminate\Database\Seeder;

/**
 * Class EmployeeSeeder
 */
class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        factory( \Clean\Domain\Employees\EmployeeModel::class, 10 )->create();
    }
}
