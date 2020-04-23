<?php

namespace Clean\Persistence\Employees;

use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Employees\EmployeeModel;
use Clean\Domain\Employees\EmployeeRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class EmployeeRepository
 *
 * @package Clean\Persistence\Employees
 */
class EmployeeRepository implements EmployeeRepositoryInterface
{
    /**
     * @param int $identity
     *
     * @return EmployeeInterface
     */
    public function get( int $identity ): EmployeeInterface
    {
        return EmployeeModel::find( $identity );
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return EmployeeModel::all();
    }
}
