<?php

namespace Clean\Interfaces\Providers;

use Clean\Domain\Customer\CustomerFactory;
use Clean\Domain\Customer\CustomerFactoryInterface;
use Clean\Domain\Customer\CustomerRepositoryInterface;
use Clean\Persistence\Customer\CustomerRepository;
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
