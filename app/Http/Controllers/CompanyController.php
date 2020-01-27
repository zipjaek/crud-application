<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::all());
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required'
        ]);

        $company = Company::create($request->all());

        return response()->json($company, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required'
        ]);

        $company = Company::findOrfail($id);
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function destroy($id, Company $company)
    {
        $company->findOrfail($id)->employees()->delete();
        $company->find($id)->projects()->delete();
        $company->findOrFail($id)->delete();

        return response('Deleted successfully', 200);
    }
}