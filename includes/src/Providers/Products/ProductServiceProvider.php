<?php

namespace Clean\Providers\Products;

use Clean\Application\Products\Queries\GetProductList\GetProductList;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Clean\Domain\Products\ProductFactory;
use Clean\Domain\Products\ProductFactoryInterface;
use Clean\Domain\Products\ProductRepositoryInterface;
use Clean\Persistence\Products\ProductRepository;
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
}
