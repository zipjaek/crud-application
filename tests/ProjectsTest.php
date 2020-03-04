<?php

use App\Project;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProjectsTest extends TestCase
{
    public function test_can_list_projects()
    {
        $data = $this->get('/projects')->assertResponseOk();
        $this->seeJson($data);
    }

    public function test_can_create_projects()
    {
        $data = [
            'company_id' => 2,
            'employee_id' => 3,
            'title' => 'New Project',
            'active'=> false
        ];

        $this->post('projects/create', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_update_projects()
    {
        $project = Project::first();

        $data = [
            'company_id' => 4,
            'employee_id' => 7,
            'title' => 'New Project Updated',
            'active'=> true
        ];

        $this->put('projects/'. $project->id .'/edit', $data)
            ->assertResponseOk();

        $this->seeJson($data);
    }

    public function test_can_delete_projects()
    {
        $project = Project::first();

        $this->delete('projects/'.$project->id);
        $this->assertResponseOk();
        $this->assertEquals("Deleted successfully",$this->response->content());
    }
}
