<?php

namespace Clean\Interfaces\Provider;

use Carbon\Laravel\ServiceProvider;
use Clean\Interfaces\Customer\CustomerController;
use Clean\Interfaces\Home\HomeController;
use Illuminate\Support\Facades\Route;

/**
 * Class RouteServiceProvider
 *
 * @package Clean\Interfaces\Provider
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
