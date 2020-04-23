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
     * @param int $identity
     *
     * @return EmployeeInterface
     */
    public function get( int $identity ): EmployeeInterface;

    /**
     * @return Collection
     */
    public function all(): Collection;
}
