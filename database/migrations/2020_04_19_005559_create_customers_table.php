<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCustomersTable
 */
class CreateCustomersTable extends Migration
{
    public function up(): void
    {
        Schema::create( 'customers', function ( Blueprint $table ) {
            $table->id();
            $table->timestamps();
            $table->string( 'name', 50 );
        } );
    }

    public function down(): void
    {
        Schema::dropIfExists( 'customers' );
    }
}
