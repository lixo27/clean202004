<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Application\Employees\Queries\GetEmployeeList\GetEmployeeListInterface;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Clean\Interfaces\Sales\Models\CreateSaleViewModelFactoryInterface;
use Illuminate\Routing\Controller;

/**
 * Class CreateSaleController
 *
 * @package Clean\Interfaces\Sales
 */
class CreateSaleController extends Controller
{
    /**
     * @var CreateSaleViewModelFactoryInterface
     */
    private $createSaleViewModelFactory;

    /**
     * CreateSaleController constructor.
     *
     * @param CreateSaleViewModelFactoryInterface $createSaleViewModelFactory
     */
    public function __construct( CreateSaleViewModelFactoryInterface $createSaleViewModelFactory )
    {
        $this->createSaleViewModelFactory = $createSaleViewModelFactory;
    }

    public function __invoke()
    {
        $saleViewModel = $this->createSaleViewModelFactory->create();
        
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
