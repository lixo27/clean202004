<?php

namespace Clean\Interfaces\Providers;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerList;
use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class ApplicationServiceProvider
 *
 * @package Clean\Interfaces\Providers
 */
class ApplicationServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetCustomerListInterface::class => GetCustomerList::class,
    ];
}
