<?php

namespace Clean\Providers;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerList;
use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class ApplicationServiceProvider
 *
 * @package Clean\Providers
 */
class ApplicationServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetCustomerListInterface::class => GetCustomerList::class,
    ];
}