<?php

namespace Clean\Application\Sales\Queries\GetSaleDetail;

/**
 * Class GetSaleDetailModel
 *
 * @package Clean\Application\Sales\Queries\GetSaleDetail
 */
class GetSaleDetailModel
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
