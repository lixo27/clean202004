<?php

namespace Clean\Application\Sales\Commands\CreateSale;

/**
 * Class CreateSaleModel
 *
 * @package Clean\Application\Sales\Commands\CreateSale
 */
class CreateSaleModel
{
    /**
     * @var int
     */
    public $customerId;

    /**
     * @var int
     */
    public $employeeId;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $quantity = 1;
}
