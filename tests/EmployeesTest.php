<?php

use App\Employee;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class EmployeesTest extends TestCase
{
    public function test_can_list_employees()
    {
        $data = $this->get('/employees')->assertResponseOk();
        $this->seeJson($data);
    }

    public function test_can_create_employees()
    {
        $data = [
            'name' => 'New Employee',
            'title' => 'Video Editor',
            'email' => 'new@employee.com',
            'company_id' => 6
        ];

        $this->post('employees/create', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_update_employees()
    {
        $employee = Employee::first();

        $data = [
            'company_id' => 2,
            'name' => 'Employee Updated',
            'title' => 'Research Manager',
            'email' => 'new1@employee.com',
        ];

        $this->put('employees/'. $employee->id .'/edit', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_delete_employees()
    {
        $employee = Employee::first();

        $this->delete('employees/'.$employee->id);
        $this->assertResponseOk();
        $this->assertEquals("Deleted successfully",$this->response->content());
    }
}
