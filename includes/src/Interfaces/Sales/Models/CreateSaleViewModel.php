<?php

namespace Clean\Interfaces\Sales\Models;

use Clean\Application\Sales\Commands\CreateSale\CreateSaleModel;
use Illuminate\Support\Collection;

/**
 * Class CreateSaleViewModel
 *
 * @package Clean\Interfaces\Sales\Models
 */
class CreateSaleViewModel
{
    /**
     * @var Collection
     */
    public $customers;

    /**
     * @var Collection
     */
    public $employees;

    /**
     * @var Collection
     */
    public $products;

    /**
     * @var CreateSaleModel
     */
    public $sale;
}
