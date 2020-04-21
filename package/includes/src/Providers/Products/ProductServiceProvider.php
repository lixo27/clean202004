<?php

namespace Clean\Providers\Products;

use Clean\Application\Products\Queries\GetProductList\GetProductList;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Clean\Domain\Products\ProductFactory;
use Clean\Domain\Products\ProductFactoryInterface;
use Clean\Domain\Products\ProductRepositoryInterface;
use Clean\Interfaces\Products\IndexProductController;
use Clean\Persistence\Products\ProductRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class ProductServiceProvider
 *
 * @package Clean\Providers\Products
 */
class ProductServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetProductListInterface::class => GetProductList::class,
        ProductFactoryInterface::class => ProductFactory::class,
        ProductRepositoryInterface::class => ProductRepository::class,
    ];

    public function boot()
    {
        Route::name( 'product.' )->group( function () {
            Route::get( 'products', IndexProductController::class )->name( 'index' );
        } );
    }
}
