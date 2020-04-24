<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Sales\Commands\CreateSale\CreateSaleInterface;
use Clean\Application\Sales\Commands\CreateSale\CreateSaleModelFactoryInterface;
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
     * @var CreateSaleModelFactoryInterface
     */
    private $createSaleModelFactory;

    /**
     * StoreSaleController constructor.
     *
     * @param CreateSaleInterface             $createSale
     * @param CreateSaleModelFactoryInterface $createSaleModelFactory
     */
    public function __construct(
        CreateSaleInterface $createSale,
        CreateSaleModelFactoryInterface $createSaleModelFactory
    )
    {
        $this->createSale = $createSale;
        $this->createSaleModelFactory = $createSaleModelFactory;
    }

    public function __invoke( Request $request )
    {
        $validatedData = $request->validate( [
            'customerId' => 'required',
            'employeeId' => 'required',
            'productId' => 'required',
            'quantity' => 'required',
        ] );

        $saleModel = $this->createSaleModelFactory->createFromArray( $validatedData );
        $this->createSale->execute( $saleModel );

        return redirect()->route( 'sale.index' );
    }
}
