<?php

namespace Clean\Interfaces\Sales\Models;

/**
 * Interface CreateSaleViewModelFactoryInterface
 *
 * @package Clean\Interfaces\Sales\Models
 */
interface CreateSaleViewModelFactoryInterface
{
    /**
     * @return \stdClass
     */
    public function create(): \stdClass;
}
