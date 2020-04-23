<?php

namespace Clean;

use Clean\Domain\Employees\EmployeeModel;
use Illuminate\Database\Seeder;

/**
 * Class EmployeeSeeder
 *
 * @package Clean
 */
class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        factory( EmployeeModel::class, 5 )->create();
    }
}
