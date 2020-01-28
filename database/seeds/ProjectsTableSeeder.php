<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'company_id' => 1,
                'employee_id' => 1,
                'title' => 'Logic Modules',
                'active' => true
            ],
            [
                'company_id' => 1,
                'employee_id' => 1,
                'title' => 'Apple Maps',
                'active' => false
            ],
            [
                'company_id' => 1,
                'employee_id' => 2,
                'title' => 'Neural Net',
                'active' => true
            ],
            [
                'company_id' => 1,
                'employee_id' => 2,
                'title' => 'Compression Algorithm',
                'active' => false
            ],
            [
                'company_id' => 2,
                'employee_id' => 3,
                'title' => 'Video Streaming',
                'active' => true
            ],
            [
                'company_id' => 2,
                'employee_id' => 3,
                'title' => 'Chat Service',
                'active' => false
            ],
            [
                'company_id' => 2,
                'employee_id' => 4,
                'title' => 'Server Box',
                'active' => true
            ],
            [
                'company_id' => 2,
                'employee_id' => 4,
                'title' => 'Decentralized Internet',
                'active' => false
            ],
            [
                'company_id' => 3,
                'employee_id' => 5,
                'title' => 'Ozone 9',
                'active' => true
            ],
            [
                'company_id' => 3,
                'employee_id' => 5,
                'title' => 'Creative Suite',
                'active' => false
            ],
            [
                'company_id' => 3,
                'employee_id' => 6,
                'title' => 'RX Post Production',
                'active' => true
            ],
            [
                'company_id' => 3,
                'employee_id' => 6,
                'title' => 'Neutron 3',
                'active' => false
            ],
            [
                'company_id' => 4,
                'employee_id' => 7,
                'title' => 'Electric Guitars',
                'active' => true
            ],
            [
                'company_id' => 4,
                'employee_id' => 7,
                'title' => 'Pickups & Electronics',
                'active' => false
            ],
            [
                'company_id' => 4,
                'employee_id' => 8,
                'title' => 'Acoustic Guitars',
                'active' => true
            ],
            [
                'company_id' => 4,
                'employee_id' => 8,
                'title' => 'Knobs',
                'active' => false
            ],
            [
                'company_id' => 5,
                'employee_id' => 9,
                'title' => 'Amplifiers',
                'active' => true
            ],
            [
                'company_id' => 5,
                'employee_id' => 9,
                'title' => 'Effects Pedals',
                'active' => false
            ],
            [
                'company_id' => 5,
                'employee_id' => 10,
                'title' => 'Home & Office',
                'active' => true
            ],
            [
                'company_id' => 5,
                'employee_id' => 10,
                'title' => 'Contemporary Series',
                'active' => false
            ],
            [
                'company_id' => 6,
                'employee_id' => 11,
                'title' => 'Sound Isolation',
                'active' => true
            ],
            [
                'company_id' => 6,
                'employee_id' => 11,
                'title' => 'Control Room',
                'active' => false
            ],
            [
                'company_id' => 6,
                'employee_id' => 12,
                'title' => 'Small Booths',
                'active' => true
            ],
            [
                'company_id' => 6,
                'employee_id' => 12,
                'title' => 'Performance Area',
                'active' => false
            ]
        ]);
    }
}
