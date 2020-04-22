<?php

use Illuminate\Support\Facades\Route;

Route::name( 'customer.' )->group( function () {
    Route::get( 'customers', \Clean\Interfaces\Customers\IndexCustomerController::class )->name( 'index' );
} );

Route::name( 'employee.' )->group( function () {
    Route::get( 'employees', \Clean\Interfaces\Employees\IndexEmployeeController::class )->name( 'index' );
} );

Route::name( 'product.' )->group( function () {
    Route::get( 'products', \Clean\Interfaces\Products\IndexProductController::class )->name( 'index' );
} );
