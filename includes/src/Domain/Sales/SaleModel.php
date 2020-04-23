<?php

namespace Clean\Domain\Sales;

use Clean\Domain\Common\AbstractModel;
use Clean\Domain\Customers\CustomerInterface;
use Clean\Domain\Customers\CustomerModel;
use Clean\Domain\Employees\EmployeeInterface;
use Clean\Domain\Employees\EmployeeModel;
use Clean\Domain\Products\ProductInterface;
use Clean\Domain\Products\ProductModel;

/**
 * Class SaleModel
 *
 * @package Clean\Domain\Sales
 */
class SaleModel extends AbstractModel implements SaleInterface
{
    protected $table = 'sales';

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->created_at;
    }

    /**
     * @return CustomerInterface
     */
    public function getCustomer(): CustomerInterface
    {
        return $this->customer;
    }

    /**
     * @return EmployeeInterface
     */
    public function getEmployee(): EmployeeInterface
    {
        return $this->employee;
    }

    /**
     * @return ProductInterface
     */
    public function getProduct(): ProductInterface
    {
        return $this->product;
    }

    /**
     * @return TotalPrice
     */
    public function getTotalPrice(): TotalPrice
    {
        return new TotalPrice( $this->total );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo( CustomerModel::class );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo( EmployeeModel::class );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo( ProductModel::class );
    }
}
