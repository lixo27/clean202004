<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProductsTable
 */
class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->timestamps();
            $table->string( 'name', 50 );
            $table->float( 'price', 5, 2 );
        } );
    }

    public function down()
    {
        Schema::dropIfExists( 'products' );
    }
}
