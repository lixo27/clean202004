<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Illuminate\Routing\Controller;

/**
 * Class CreateSaleController
 *
 * @package Clean\Interfaces\Sales
 */
class CreateSaleController extends Controller
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
     * CreateSaleController constructor.
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

    public function __invoke()
    {
        $saleViewModel = new \stdClass();
        $saleViewModel->customers = $this->customerList->execute();
        $saleViewModel->employees = $this->employeeList->execute();
        $saleViewModel->products = $this->productList->execute();

        $saleViewModel->sale = new \stdClass();
        $saleViewModel->sale->customerId = null;
        $saleViewModel->sale->employeeId = null;
        $saleViewModel->sale->productId = null;
        $saleViewModel->sale->quantity = 1;

        return view( 'clean::sale.create', [
            'saleViewModel' => $saleViewModel,
        ] );
    }
}
