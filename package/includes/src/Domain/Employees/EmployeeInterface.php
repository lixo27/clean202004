<?php

namespace Clean\Domain\Employees;

use Clean\Domain\Common\EntityInterface;

/**
 * Interface EmployeeInterface
 *
 * @package Clean\Domain\Employees
 */
interface EmployeeInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
