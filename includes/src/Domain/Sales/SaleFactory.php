<?php

namespace Clean\Domain\Sales;

use Clean\Domain\Customers\CustomerInterface;
use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Products\ProductInterface;

/**
 * Class SaleFactory
 *
 * @package Clean\Domain\Sales
 */
class SaleFactory implements SaleFactoryInterface
{
    /**
     * @param CustomerInterface $customer
     * @param EmployeeInterface $employee
     * @param ProductInterface  $product
     * @param TotalPrice        $totalPrice
     *
     * @return SaleInterface
     */
    public function create(
        CustomerInterface $customer,
        EmployeeInterface $employee,
        ProductInterface $product,
        TotalPrice $totalPrice
    ): SaleInterface
    {
        $sale = new SaleModel();
        $sale->customer()->associate( $customer );
        $sale->employee()->associate( $employee );
        $sale->product()->associate( $product );
        $sale->total = $totalPrice->getValue();

        return $sale;
    }
}
