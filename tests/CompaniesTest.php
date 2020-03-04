<?php

use App\Company;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CompaniesTest extends TestCase
{
    public function test_can_list_companies()
    {
        $data = $this->get('/companies')->assertResponseOk();
        $this->seeJson($data);
    }

    public function test_can_create_companies()
    {
        $data = [
            'name' => 'New Company',
            'address' => '123 Main Street'
        ];

        $this->post('companies/create', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_update_companies()
    {
        $company = Company::first();

        $data = [
            'name' => 'Apple',
            'address' => 'We moved to a new location...'
        ];

        $this->put('companies/'. $company->id .'/edit', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_delete_companies()
    {
        $company = Company::first();

        $this->delete('companies/'.$company->id);
        $this->assertResponseOk();
        $this->assertEquals("Deleted successfully",$this->response->content());
    }
}
