<?php

namespace Clean\Application\Provider;

use Clean\Application\Customer\Query\GetCustomerList\GetCustomerList;
use Clean\Application\Customer\Query\GetCustomerList\GetCustomerListInterface;
use Clean\Domain\Customer\CustomerFactory;
use Clean\Domain\Customer\CustomerFactoryInterface;
use Clean\Domain\Customer\CustomerRepositoryInterface;
use Clean\Persistence\Customer\CustomerRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class CustomerServiceProvider
 *
 * @package Clean\Application\Provider
 */
class CustomerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton( CustomerFactoryInterface::class, function () {
            return new CustomerFactory();
        } );

        $this->app->singleton( CustomerRepositoryInterface::class, function () {
            return new CustomerRepository();
        } );

        $this->app->singleton( GetCustomerListInterface::class, function ( $app ) {
            return new GetCustomerList( $app->make( CustomerRepositoryInterface::class ) );
        } );
    }
}
