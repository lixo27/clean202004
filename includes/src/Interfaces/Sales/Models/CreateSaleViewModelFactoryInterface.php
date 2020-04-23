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
     * @return CreateSaleViewModel
     */
    public function create(): CreateSaleViewModel;
}
