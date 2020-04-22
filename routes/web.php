<?php

use Illuminate\Support\Facades\Route;

Route::get( 'clean', \Clean\Interfaces\Home\IndexHomeController::class )->name( 'home.index' );
Route::get( 'clean/customers', \Clean\Interfaces\Customers\IndexCustomerController::class )->name( 'customer.index' );
Route::get( 'clean/employees', \Clean\Interfaces\Employees\IndexEmployeeController::class )->name( 'employee.index' );
Route::get( 'clean/products', \Clean\Interfaces\Products\IndexProductController::class )->name( 'product.index' );
