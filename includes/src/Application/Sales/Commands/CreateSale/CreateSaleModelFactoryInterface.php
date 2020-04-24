<?php

namespace Clean\Application\Sales\Commands\CreateSale;

/**
 * Interface CreateSaleModelFactoryInterface
 *
 * @package Clean\Application\Sales\Commands\CreateSale
 */
interface CreateSaleModelFactoryInterface
{
    /**
     * @param array $attributes
     *
     * @return CreateSaleModel
     */
    public function createFromArray( array $attributes ): CreateSaleModel;
}
