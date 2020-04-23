<?php

namespace Clean\Application\Sales\Queries\GetSaleList;

use Clean\Domain\Sales\SaleInterface;
use Clean\Domain\Sales\SaleRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class GetSaleList
 *
 * @package Clean\Application\Sales\Queries\GetSaleList
 */
class GetSaleList implements GetSaleListInterface
{
    /**
     * @var SaleRepositoryInterface
     */
    private $saleRepository;

    /**
     * GetSaleList constructor.
     *
     * @param SaleRepositoryInterface $saleRepository
     */
    public function __construct( SaleRepositoryInterface $saleRepository )
    {
        $this->saleRepository = $saleRepository;
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
        $sales = $this->saleRepository->all();
        return $sales->map( function ( SaleInterface $sale ) {

            $saleModel = new \stdClass();
            $saleModel->id = $sale->identity();
            $saleModel->customerName = $sale->getCustomer()->getName();
            $saleModel->employeeName = $sale->getEmployee()->getName();
            $saleModel->productName = $sale->getProduct()->getName();
            $saleModel->total = $sale->getTotalPrice()->getValue();

            return $saleModel;

        } );
    }
}
