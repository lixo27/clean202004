<?php

namespace Clean\Interfaces\Providers;

use Clean\Application\Customer\Query\GetCustomerList\GetCustomerList;
use Clean\Application\Customer\Query\GetCustomerList\GetCustomerListInterface;
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
