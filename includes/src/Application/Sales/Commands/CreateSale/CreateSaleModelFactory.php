<?php

namespace Clean\Application\Sales\Commands\CreateSale;

/**
 * Interface CreateSaleModelFactory
 *
 * @package Clean\Application\Sales\Commands\CreateSale
 */
class CreateSaleModelFactory implements CreateSaleModelFactoryInterface
{
    /**
     * @param array $attributes
     *
     * @return CreateSaleModel
     */
    public function createFromArray( array $attributes ): CreateSaleModel
    {
        $createSaleModel = new CreateSaleModel();
        $createSaleModel->customerId = $attributes[ 'customerId' ];
        $createSaleModel->employeeId = $attributes[ 'employeeId' ];
        $createSaleModel->productId = $attributes[ 'productId' ];
        $createSaleModel->quantity = $attributes[ 'quantity' ];

        return $createSaleModel;
    }
}
