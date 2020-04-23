<?php

namespace Clean\Application\Sales\Commands\CreateSale;

use Clean\Domain\Customers\CustomerRepositoryInterface;
use Clean\Domain\Employees\EmployeeRepositoryInterface;
use Clean\Domain\Products\ProductRepositoryInterface;
use Clean\Domain\Sales\SaleFactoryInterface;
use Clean\Domain\Sales\SaleRepositoryInterface;
use Clean\Domain\Sales\TotalPrice;

/**
 * Class CreateSale
 *
 * @package Clean\Application\Sales\Commands\CreateSale
 */
class CreateSale implements CreateSaleInterface
{
    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var EmployeeRepositoryInterface
     */
    private $employeeRepository;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var SaleRepositoryInterface
     */
    private $saleRepository;

    /**
     * @var SaleFactoryInterface
     */
    private $saleFactory;

    /**
     * CreateSale constructor.
     *
     * @param CustomerRepositoryInterface $customerRepository
     * @param EmployeeRepositoryInterface $employeeRepository
     * @param ProductRepositoryInterface  $productRepository
     * @param SaleRepositoryInterface     $saleRepository
     * @param SaleFactoryInterface        $saleFactory
     */
    public function __construct(
        CustomerRepositoryInterface $customerRepository,
        EmployeeRepositoryInterface $employeeRepository,
        ProductRepositoryInterface $productRepository,
        SaleRepositoryInterface $saleRepository,
        SaleFactoryInterface $saleFactory
    )
    {
        $this->customerRepository = $customerRepository;
        $this->employeeRepository = $employeeRepository;
        $this->productRepository = $productRepository;
        $this->saleRepository = $saleRepository;
        $this->saleFactory = $saleFactory;
    }

    /**
     * @param CreateSaleModel $model
     */
    public function execute( CreateSaleModel $model ): void
    {
        $customer = $this->customerRepository->get( $model->customerId );
        $employee = $this->employeeRepository->get( $model->employeeId );
        $product = $this->productRepository->get( $model->productId );

        $totalPrice = new TotalPrice( $product->getPrice(), $model->quantity );
        $sale = $this->saleFactory->create( $customer, $employee, $product, $totalPrice );

        $this->saleRepository->add( $sale );
    }
}
