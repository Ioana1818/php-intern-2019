<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Company;

class CompaniesController extends Controller
{
    public function show()
    {
        $companies = Company::all();
        return view('business.companies', compact('companies'));
    }
    public function create(Request $request)
    {
        $requestData = $request->all();
        $company = new Company();
        $company->name = $requestData['name'];
        $company->description = $requestData['description'];
        $company->save();
        return redirect('/companies');
    }
    public function edit($id)
    {
        $company = Company::find($id);
        return view('business.editCompany', compact('company'));
    }
    public function update($id, Request $request)
    {
        $company = Company::find($id);
        $requestData = $request->all();
        $company->name = $requestData['name'];
        $company->description = $requestData['description'];
        $company->save();
        return redirect('/companies');
    }
    public function destroy($id)
    {

        $company = Company::find($id);
        $company->delete($id);
        return redirect('/companies');
    }
}
