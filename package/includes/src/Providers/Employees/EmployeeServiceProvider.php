<?php

namespace Clean\Providers\Employees;

use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeList;
use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Clean\Domain\Employees\EmployeeFactory;
use Clean\Domain\Employees\EmployeeFactoryInterface;
use Clean\Domain\Employees\EmployeeRepositoryInterface;
use Clean\Persistence\Employees\EmployeeRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class EmployeeServiceProvider
 *
 * @package Clean\Providers\Employees
 */
class EmployeeServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetEmployeeListInterface::class => GetEmployeeList::class,
        EmployeeFactoryInterface::class => EmployeeFactory::class,
        EmployeeRepositoryInterface::class => EmployeeRepository::class,
    ];
}
