<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Sales\Commands\CreateSale\CreateSaleInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class StoreSaleController
 *
 * @package Clean\Interfaces\Sales
 */
class StoreSaleController extends Controller
{
    /**
     * @var CreateSaleInterface
     */
    private $createSale;

    /**
     * StoreSaleController constructor.
     *
     * @param CreateSaleInterface $createSale
     */
    public function __construct( CreateSaleInterface $createSale )
    {
        $this->createSale = $createSale;
    }

    public function __invoke( Request $request )
    {
        $saleModel = new \stdClass();
        $saleModel->customerId = intval( $request->input( 'customerId' ) );
        $saleModel->employeeId = intval( $request->input( 'employeeId' ) );
        $saleModel->productId = intval( $request->input( 'productId' ) );
        $saleModel->quantity = intval( $request->input( 'quantity' ) );

        $this->createSale->execute( $saleModel );

        return redirect()->route( 'sale.index' );
    }
}
