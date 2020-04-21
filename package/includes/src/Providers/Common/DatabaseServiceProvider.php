<?php

namespace Clean\Providers\Common;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;

/**
 * Class DatabaseServiceProvider
 *
 * @package Clean\Providers\Common
 */
class DatabaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        /** @var Factory */
        $eloquentFactory = $this->app->get( Factory::class );
        $eloquentFactory->load( dirname( base_path() ) . '/package/database/factories' );
    }
}
