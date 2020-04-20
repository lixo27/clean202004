<?php

namespace Clean\Interfaces\Providers;

use Clean\Domain\Customers\CustomerFactory;
use Clean\Domain\Customers\CustomerFactoryInterface;
use Clean\Domain\Customers\CustomerRepositoryInterface;
use Clean\Persistence\Customers\CustomerRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class DomainServiceProvider
 *
 * @package Clean\Interfaces\Providers
 */
class DomainServiceProvider extends ServiceProvider
{
    public $singletons = [
        CustomerFactoryInterface::class => CustomerFactory::class,
        CustomerRepositoryInterface::class => CustomerRepository::class,
    ];
}
