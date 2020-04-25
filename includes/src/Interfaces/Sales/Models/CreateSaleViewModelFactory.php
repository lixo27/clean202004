<?php

namespace Clean\Interfaces\Sales\Models;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Clean\Application\Sales\Commands\CreateSale\CreateSaleModel;

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
     * @return CreateSaleViewModel
     */
    public function create(): CreateSaleViewModel
    {
        $customers = $this->productList->execute();
        $employees = $this->employeeList->execute();
        $products = $this->productList->execute();

        $viewModel = new CreateSaleViewModel();
        $viewModel->sale = new CreateSaleModel();

        $viewModel->customers = $customers->map( function ( $customer ) {
            return (object)[
                'value' => $customer->id,
                'text' => $customer->name,
            ];
        } );

        $viewModel->employees = $employees->map( function ( $employee ) {
            return (object)[
                'value' => $employee->id,
                'text' => $employee->name,
            ];
        } );

        $viewModel->products = $products->map( function ( $product ) {
            return (object)[
                'value' => $product->id,
                'text' => vsprintf( '%1$s (%2$s)', [
                    $product->name,
                    ( new \NumberFormatter( 'en-US', \NumberFormatter::CURRENCY ) )->format( $product->price ),
                ] ),
            ];
        } );

        return $viewModel;
    }
}
