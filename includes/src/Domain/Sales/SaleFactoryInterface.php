<?php

namespace Clean\Domain\Sales;

use Clean\Domain\Customers\CustomerInterface;
use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Products\ProductInterface;

/**
 * Interface SaleFactoryInterface
 *
 * @package Clean\Domain\Sales
 */
interface SaleFactoryInterface
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
    ): SaleInterface;
}
