<?php

namespace Clean\Providers\Sales;

use Clean\Application\Sales\Queries\GetSaleList\GetSaleList;
use Clean\Application\Sales\Queries\GetSaleList\GetSaleListInterface;
use Clean\Domain\Sales\SaleFactory;
use Clean\Domain\Sales\SaleFactoryInterface;
use Clean\Domain\Sales\SaleRepositoryInterface;
use Clean\Persistence\Sales\SaleRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class SaleServiceProvider
 *
 * @package Clean\Providers\Sales
 */
class SaleServiceProvider extends ServiceProvider
{
    public $singletons = [
        GetSaleListInterface::class => GetSaleList::class,
        SaleFactoryInterface::class => SaleFactory::class,
        SaleRepositoryInterface::class => SaleRepository::class,
    ];
}
