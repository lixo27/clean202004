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
    public function register()
    {
        $this->registerResources();
    }

    public function registerResources()
    {
        $this->loadViewsFrom( dirname( __DIR__, 3 ) . '/resources/views', 'clean' );
    }
}
