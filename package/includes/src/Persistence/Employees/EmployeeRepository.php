<?php

namespace Clean\Persistence\Employees;

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
     * @return Collection
     */
    public function all(): Collection
    {
        return EmployeeModel::all();
    }
}
