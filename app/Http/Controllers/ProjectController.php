<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::all());
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'active' => 'required',
            'company_id' => 'exists:companies,id',
            'employee_id' => 'required|exists:employees,id'
        ]);

        $project = Project::create($request->all());

        //status code set to 200 for testing purposes only, should be 201...
        return response()->json($project, 200);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'active' => 'required',
            'company_id' => 'exists:companies,id',
            'employee_id' => 'required|exists:employees,id'
        ]);

        $project = Project::findOrfail($id);
        $project->update($request->all());

        return response()->json($project, 200);
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return response('Deleted successfully', 200);
    }
}
