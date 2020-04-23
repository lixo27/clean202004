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
     * @param \stdClass $model
     */
    public function execute( \stdClass $model ): void;
}
