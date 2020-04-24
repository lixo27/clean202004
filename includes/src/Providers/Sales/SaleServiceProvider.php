<?php

namespace Clean\Providers\Sales;

use Clean\Application\Sales\Commands\CreateSale\CreateSale;
use Clean\Application\Sales\Commands\CreateSale\CreateSaleInterface;
use Clean\Application\Sales\Commands\CreateSale\CreateSaleModelFactory;
use Clean\Application\Sales\Commands\CreateSale\CreateSaleModelFactoryInterface;
use Clean\Application\Sales\Queries\GetSaleDetail\GetSaleDetail;
use Clean\Application\Sales\Queries\GetSaleDetail\GetSaleDetailInterface;
use Clean\Application\Sales\Queries\GetSaleList\GetSaleList;
use Clean\Application\Sales\Queries\GetSaleList\GetSaleListInterface;
use Clean\Domain\Sales\SaleFactory;
use Clean\Domain\Sales\SaleFactoryInterface;
use Clean\Domain\Sales\SaleRepositoryInterface;
use Clean\Interfaces\Sales\Models\CreateSaleViewModelFactory;
use Clean\Interfaces\Sales\Models\CreateSaleViewModelFactoryInterface;
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
        CreateSaleInterface::class => CreateSale::class,
        CreateSaleModelFactoryInterface::class => CreateSaleModelFactory::class,
        GetSaleDetailInterface::class => GetSaleDetail::class,
        GetSaleListInterface::class => GetSaleList::class,
        SaleFactoryInterface::class => SaleFactory::class,
        CreateSaleViewModelFactoryInterface::class => CreateSaleViewModelFactory::class,
        SaleRepositoryInterface::class => SaleRepository::class,
    ];
}
