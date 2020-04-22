<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateEmployeesTable
 */
class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create( 'employees', function ( Blueprint $table ) {
            $table->id();
            $table->timestamps();
            $table->string( 'name', 50 );
        } );
    }

    public function down()
    {
        Schema::dropIfExists( 'employees' );
    }
}
