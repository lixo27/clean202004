<?php

namespace Clean\Domain\Employees;

/**
 * Interface EmployeeFactoryInterface
 *
 * @package Clean\Domain\Employees
 */
interface EmployeeFactoryInterface
{
    /**
     * @param string $name
     *
     * @return EmployeeInterface
     */
    public function create( string $name ): EmployeeInterface;
}
