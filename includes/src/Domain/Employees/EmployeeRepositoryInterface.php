<?php

namespace Clean\Domain\Employees;

use Illuminate\Support\Collection;

/**
 * Interface EmployeeRepositoryInterface
 *
 * @package Clean\Domain\Employees
 */
interface EmployeeRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
