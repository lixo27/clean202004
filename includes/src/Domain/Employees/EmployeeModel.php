<?php

namespace Clean\Domain\Employees;

use Clean\Domain\Common\AbstractModel;

/**
 * Class EmployeeModel
 *
 * @package Clean\Domain\Employees
 */
class EmployeeModel extends AbstractModel implements EmployeeInterface
{
    protected $table = 'employees';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
