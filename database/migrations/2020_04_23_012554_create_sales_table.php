<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSalesTable
 */
class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create( 'sales', function ( Blueprint $table ) {
            $table->id();
            $table->timestamps();
            $table->foreignId( 'customer_id' )->constrained();
            $table->foreignId( 'employee_id' )->constrained();
            $table->foreignId( 'product_id' )->constrained();
            $table->float( 'total', 5, 2 );
        } );
    }

    public function down()
    {
        Schema::dropIfExists( 'sales' );
    }
}
