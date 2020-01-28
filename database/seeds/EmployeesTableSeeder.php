<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'company_id' => 1,
                'name' => 'Brad Tavares',
                'email' => 'btavares@apple.com',
                'title' => 'Lab Assistant'
            ],[
                'company_id' => 1,
                'name' => 'Michael Johnson',
                'email' => 'mjohnson@apple.com',
                'title' => 'Hardware Engineer'
            ],[
                'company_id' => 2,
                'name' => 'Corey Taylor',
                'email' => 'ctaylor@google.com',
                'title' => 'Software Engineer'
            ],[
                'company_id' => 2,
                'name' => 'Tim Reynolds',
                'email' => 'treynolds@google.com',
                'title' => 'Visual Designer'
            ],[
                'company_id' => 3,
                'name' => 'Aaron Marshall',
                'email' => 'amarshall@izotope.com',
                'title' => 'Marketing Manager'
            ],[
                'company_id' => 3,
                'name' => 'Eric Reuter',
                'email' => 'ereuter@izotope.com',
                'title' => 'eCommerce Analyst'
            ],[
                'company_id' => 4,
                'name' => 'Robby Hensley',
                'email' => 'rhensley@gibson.com',
                'title' => 'Project Manager'
            ],[
                'company_id' => 4,
                'name' => 'Jimmy Gresham',
                'email' => 'jgresham@gibson.com',
                'title' => 'Production Supervisor'
            ],[
                'company_id' => 5,
                'name' => 'Anthony Smith',
                'email' => 'asmith@fender.com',
                'title' => 'Repair Technician'
            ],[
                'company_id' => 5,
                'name' => 'Kyle Collins',
                'email' => 'kcollins@fender.com',
                'title' => 'Public Relations Specialist'
            ],[
                'company_id' => 6,
                'name' => 'Mark Tull',
                'email' => 'mtull@hensonrecording.com',
                'title' => 'Recording Engineer'
            ],[
                'company_id' => 6,
                'name' => 'Bruce Rehagen',
                'email' => 'brehagen@hensonrecording.com',
                'title' => 'Receptionist'
            ]
        ]);
    }
}
