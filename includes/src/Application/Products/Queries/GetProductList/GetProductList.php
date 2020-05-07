<?php

namespace Clean\Application\Products\Queries\GetProductList;

use Clean\Domain\Products\ProductInterface;
use Clean\Domain\Products\ProductRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class GetProductList
 *
 * @package Clean\Application\Products\Queries\GetProductList
 */
class GetProductList implements GetProductListInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * GetProductList constructor.
     *
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct( ProductRepositoryInterface $productRepository )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
        $products = $this->productRepository->all();
        return $products->map( function ( ProductInterface $product ) {

            $productModel = new GetProductListModel();
            $productModel->id = $product->identity();
            $productModel->name = $product->getName();
            $productModel->price = $product->getPrice();

            return $productModel;

        } );
    }
}
