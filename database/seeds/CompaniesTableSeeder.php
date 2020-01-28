<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Apple Inc.',
                'address' => 'One Apple Park Way, Cupertino, CA 95014'
            ],[
                'name' => 'Google LLC',
                'address' => '1600 Amphitheatre Pkwy, Mountain View, CA 94043'
            ],[
                'name' => 'iZotope Inc.',
                'address' => '60 Hampshire St, Cambridge, MA 02139'
            ],[
                'name' => 'Gibson Brands, Inc.',
                'address' => '309 Plus Park Blvd. Nashville, TN 37217'
            ],[
                'name' => 'Fender Musical Instruments Corporation',
                'address' => '8860 E Chaparral Rd # 100 Scottsdale, AZ 85250-2610'
            ],[
                'name' => 'Henson Recording Studios',
                'address' => '1416 N La Brea Ave, Los Angeles, CA 90028'
            ]
        ]);
    }
}
