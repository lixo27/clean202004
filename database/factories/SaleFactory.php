<?php

namespace Clean;

use Clean\Domain\Customers\CustomerModel;
use Clean\Domain\Employees\EmployeeModel;
use Clean\Domain\Products\ProductModel;
use Clean\Domain\Sales\SaleModel;
use Faker\Generator;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define( SaleModel::class, function ( Generator $faker ) {

    $customerModel = factory( CustomerModel::class )->create();
    $employeeModel = factory( EmployeeModel::class )->create();
    $productModel = factory( ProductModel::class )->create();

    return [
        'created_at' => now(),
        'updated_at' => now()->addDay(),
        'customer_id' => $customerModel->id,
        'employee_id' => $employeeModel->id,
        'product_id' => $productModel->id,
        'total' => $productModel->price,
    ];

} );
