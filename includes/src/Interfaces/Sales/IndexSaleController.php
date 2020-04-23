<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Clean\Application\Sales\Queries\GetSaleList\GetSaleListInterface;
use Illuminate\Routing\Controller;

/**
 * Class IndexSaleController
 *
 * @package Clean\Interfaces\Sales
 */
class IndexSaleController extends Controller
{
    /**
     * @var GetSaleListInterface
     */
    private $saleList;

    /**
     * IndexSaleController constructor.
     *
     * @param GetSaleListInterface $saleList
     */
    public function __construct( GetSaleListInterface $saleList )
    {
        $this->saleList = $saleList;
    }

    public function __invoke()
    {
        $sales = $this->saleList->execute();

        return view( 'clean::sale.index', [
            'sales' => $sales,
        ] );
    }
}
