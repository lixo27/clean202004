<?php

namespace Clean\Interfaces\Sales\Models;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;

/**
 * Class CreateSaleViewModelFactory
 *
 * @package Clean\Interfaces\Sales\Models
 */
class CreateSaleViewModelFactory implements CreateSaleViewModelFactoryInterface
{
    /**
     * @var GetCustomerListInterface
     */
    private $customerList;

    /**
     * @var GetEmployeeListInterface
     */
    private $employeeList;

    /**
     * @var GetProductListInterface
     */
    private $productList;

    /**
     * CreateSaleViewModelFactory constructor.
     *
     * @param GetCustomerListInterface $customerList
     * @param GetEmployeeListInterface $employeeList
     * @param GetProductListInterface  $productList
     */
    public function __construct(
        GetCustomerListInterface $customerList,
        GetEmployeeListInterface $employeeList,
        GetProductListInterface $productList
    )
    {
        $this->customerList = $customerList;
        $this->employeeList = $employeeList;
        $this->productList = $productList;
    }

    /**
     * @return \stdClass
     */
    public function create(): \stdClass
    {
        $viewModel = new \stdClass();

        $customers = $this->productList->execute();
        $employees = $this->employeeList->execute();
        $products = $this->productList->execute();

        $viewModel->customers = $customers->map( function ( $customer ) {
            $customerModel = new \stdClass();
            $customerModel->value = $customer->id;
            $customerModel->text = $customer->name;

            return $customerModel;
        } );

        $viewModel->employees = $employees->map( function ( $employee ) {
            $employeeModel = new \stdClass();
            $employeeModel->value = $employee->id;
            $employeeModel->text = $employee->name;

            return $employeeModel;
        } );

        $viewModel->products = $products->map( function ( $product ) {
            $productModel = new \stdClass();
            $productModel->value = $product->id;
            $productModel->text = sprintf( '%1$s (%2$s)', $product->name, money_format( '%.2n', $product->price ) );

            return $productModel;
        } );

        return $viewModel;
    }
}
