<?php

namespace Clean\Providers;

use Clean\Interfaces\Customers\IndexCustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 *
 * @package Clean\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::name( 'customer.' )->group( function () {
            Route::get( 'customers', IndexCustomerController::class )->name( 'index' );
        } );
    }
}
