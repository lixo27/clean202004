<?php

namespace Clean\Interfaces\Providers;

use Clean\Interfaces\Customer\CustomerController;
use Clean\Interfaces\Home\HomeController;
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

            Route::get( '/', HomeController::class )->name( 'home' );
            Route::get( 'customer', CustomerController::class )->name( 'customer' );

        } );
    }
}
