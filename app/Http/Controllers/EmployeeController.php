<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json(Employee::all());
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'company_id' => 'required|exists:companies,id'
        ]);

        $employee = Employee::create($request->all());

        return response()->json($employee, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'company_id' => 'required|exists:companies,id'
        ]);

        $employee = Employee::findOrfail($id);
        $employee->update($request->all());

        return response()->json($employee, 200);
    }

    public function destroy($id, Employee $employee)
    {   
        $employee->findOrfail($id)->projects()->delete();
        $employee->findOrFail($id)->delete();

        return response('Deleted successfully', 200);
    }
}