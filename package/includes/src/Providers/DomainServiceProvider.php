<?php

namespace Clean\Providers;

use Clean\Domain\Customers\CustomerFactory;
use Clean\Domain\Customers\CustomerFactoryInterface;
use Clean\Domain\Customers\CustomerRepositoryInterface;
use Clean\Domain\Employees\EmployeeFactory;
use Clean\Domain\Employees\EmployeeFactoryInterface;
use Clean\Domain\Employees\EmployeeRepositoryInterface;
use Clean\Persistence\Customers\CustomerRepository;
use Clean\Persistence\Employees\EmployeeRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class DomainServiceProvider
 *
 * @package Clean\Providers
 */
class DomainServiceProvider extends ServiceProvider
{
    public $singletons = [
        CustomerFactoryInterface::class => CustomerFactory::class,
        CustomerRepositoryInterface::class => CustomerRepository::class,
        EmployeeFactoryInterface::class => EmployeeFactory::class,
        EmployeeRepositoryInterface::class => EmployeeRepository::class,
    ];
}
