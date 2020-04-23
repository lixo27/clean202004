<?php

namespace Clean\Application\Sales\Queries\GetSaleDetail;

use Clean\Domain\Sales\SaleRepositoryInterface;

/**
 * Class GetSaleDetail
 *
 * @package Clean\Application\Sales\Queries\GetSaleDetail
 */
class GetSaleDetail implements GetSaleDetailInterface
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
     * @param int $identity
     *
     * @return \stdClass
     */
    public function execute( int $identity ): \stdClass
    {
        $sale = $this->saleRepository->get( $identity );

        $saleModel = new \stdClass();
        $saleModel->id = $sale->identity();
        $saleModel->customerName = $sale->getCustomer()->getName();
        $saleModel->employeeName = $sale->getEmployee()->getName();
        $saleModel->productName = $sale->getProduct()->getName();
        $saleModel->total = $sale->getTotalPrice()->getValue();

        return $saleModel;
    }
}
