<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerSeeder
 */
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $range = Collection::make( range( 1, 5 ) );
        $customers = $range->map( function ( $index ) {
            return [
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
                'name' => "Customer Name #{$index}",
            ];
        } );

        DB::table( 'customers' )->insert( $customers->toArray() );
    }
}
