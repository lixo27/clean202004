<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', \Clean\Interfaces\Home\IndexHomeController::class )->name( 'home.index' );
Route::get( 'customers', \Clean\Interfaces\Customers\IndexCustomerController::class )->name( 'customer.index' );
Route::get( 'employees', \Clean\Interfaces\Employees\IndexEmployeeController::class )->name( 'employee.index' );
Route::get( 'products', \Clean\Interfaces\Products\IndexProductController::class )->name( 'product.index' );
