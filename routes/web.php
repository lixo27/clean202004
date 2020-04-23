<?php

namespace Clean;

use Clean\Interfaces\Customers\IndexCustomerController;
use Clean\Interfaces\Employees\IndexEmployeeController;
use Clean\Interfaces\Home\IndexHomeController;
use Clean\Interfaces\Products\IndexProductController;
use Clean\Interfaces\Sales\IndexSaleController;
use Illuminate\Support\Facades\Route;

Route::get( 'clean', IndexHomeController::class )->name( 'home.index' );
Route::get( 'clean/customers', IndexCustomerController::class )->name( 'customer.index' );
Route::get( 'clean/employees', IndexEmployeeController::class )->name( 'employee.index' );
Route::get( 'clean/products', IndexProductController::class )->name( 'product.index' );
Route::get( 'clean/sales', IndexSaleController::class )->name( 'sale.index' );
