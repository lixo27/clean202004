<?php

namespace Clean\Interfaces\Sales;

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

        return view( 'clean::sale.create', [
            'saleViewModel' => $saleViewModel,
        ] );
    }
}
