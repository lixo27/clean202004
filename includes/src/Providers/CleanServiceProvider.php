<?php

namespace Clean\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class CleanServiceProvider
 *
 * @package Clean\Providers
 */
class CleanServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadFactoriesFrom( dirname( __DIR__, 3 ) . '/database/factories' );
        $this->loadMigrationsFrom( dirname( __DIR__, 3 ) . '/database/migrations' );
        $this->loadRoutesFrom( dirname( __DIR__, 3 ) . '/routes/web.php' );
        $this->loadViewsFrom( dirname( __DIR__, 3 ) . '/resources/views', 'clean' );

        $this->publishes( [
            dirname( __DIR__, 3 ) . '/resources/css' => public_path( 'vendor/clean/css' ),
        ], 'clean-public' );
    }
}
