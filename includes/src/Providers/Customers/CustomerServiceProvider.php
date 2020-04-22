<?php

namespace Clean\Providers\Customers;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerList;
use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Domain\Customers\CustomerFactory;
use Clean\Domain\Customers\CustomerFactoryInterface;
use Clean\Domain\Customers\CustomerRepositoryInterface;
use Clean\Persistence\Customers\CustomerRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class CustomerServiceProvider
 *
 * @package Clean\Providers\Customers
 */
class CustomerServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetCustomerListInterface::class => GetCustomerList::class,
        CustomerFactoryInterface::class => CustomerFactory::class,
        CustomerRepositoryInterface::class => CustomerRepository::class,
    ];
}
