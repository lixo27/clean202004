<?php

namespace Clean\Interfaces\Providers;


use Clean\Interfaces\Customers\IndexCustomerController;
use Clean\Interfaces\Home\IndexHomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 *
 * @package Clean\Interfaces\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::name( 'clean.' )->group( function () {

            Route::get( '/', IndexHomeController::class )->name( 'home.index' );
            Route::get( 'customers', IndexCustomerController::class )->name( 'customer.index' );

        } );
    }
}
