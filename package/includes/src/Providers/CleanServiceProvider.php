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
    }

    public function register()
    {
        $this->registerResources();
    }

    public function registerResources()
    {
        $this->loadViewsFrom( dirname( __DIR__, 3 ) . '/resources/views', 'clean' );
    }
}
