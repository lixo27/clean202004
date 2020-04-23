<?php

namespace Clean\Domain\Sales;

use Clean\Domain\Common\EntityInterface;
use Clean\Domain\Customers\CustomerInterface;
use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Products\ProductInterface;

/**
 * Interface SaleInterface
 *
 * @package Clean\Domain\Sales
 */
interface SaleInterface extends EntityInterface
{
    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime;

    /**
     * @return CustomerInterface
     */
    public function getCustomer(): CustomerInterface;

    /**
     * @return EmployeeInterface
     */
    public function getEmployee(): EmployeeInterface;

    /**
     * @return ProductInterface
     */
    public function getProduct(): ProductInterface;

    /**
     * @return TotalPrice
     */
    public function getTotalPrice(): TotalPrice;
}
