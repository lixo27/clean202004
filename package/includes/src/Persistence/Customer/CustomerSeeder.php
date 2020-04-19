<?php

namespace Clean\Persistence\Customer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerSeeder
 *
 * @package Clean\Persistence\Customer
 */
class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $range = Collection::make( range( 1, 5 ) );
        $customers = $range->map( function ( $index ) {
            return [
                'name' => "Customer Name #{$index}",
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ];
        } );

        DB::table( 'customers' )->insert( $customers->toArray() );
    }
}
