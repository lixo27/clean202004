<?php

namespace Clean\Application\Employees\Queries\GetEmployeeList;

use Illuminate\Support\Collection;

/**
 * Interface GetEmployeeListInterface
 *
 * @package Clean\Application\Employees\Queries\GetEmployeeList
 */
interface GetEmployeeListInterface
{
    /**
     * @return Collection
     */
    public function execute(): Collection;
}
