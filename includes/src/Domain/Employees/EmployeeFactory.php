<?php

namespace Clean\Domain\Employees;

/**
 * Class EmployeeFactory
 *
 * @package Clean\Domain\Employees
 */
class EmployeeFactory implements EmployeeFactoryInterface
{
    /**
     * @param string $name
     *
     * @return EmployeeInterface
     */
    public function create( string $name ): EmployeeInterface
    {
        $employee = new EmployeeModel();
        $employee->name = $name;

        return $employee;
    }
}
