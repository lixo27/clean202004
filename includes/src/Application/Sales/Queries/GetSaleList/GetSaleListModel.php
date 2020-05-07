<?php

namespace Clean\Application\Sales\Queries\GetSaleList;

/**
 * Class GetSaleListModel
 *
 * @package Clean\Application\Sales\Queries\GetSaleList
 */
class GetSaleListModel
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var \DateTime
     */
    public $date;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $employeeName;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var float
     */
    public $total;
}
