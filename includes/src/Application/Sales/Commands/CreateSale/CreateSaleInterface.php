<?php

namespace Clean\Application\Sales\Commands\CreateSale;

/**
 * Interface CreateSaleInterface
 *
 * @package Clean\Application\Sales\Commands\CreateSale
 */
interface CreateSaleInterface
{
    /**
     * @param CreateSaleModel $model
     */
    public function execute( CreateSaleModel $model ): void;
}
