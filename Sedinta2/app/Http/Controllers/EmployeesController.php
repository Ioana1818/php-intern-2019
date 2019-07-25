<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeesController extends Controller
{
    public function show()
    {
        //$employeeModel = new Employee();
        //$employees = $employeeModel->getEmployees();
        $employees = Employee::join('companies', 'employees.company_id', '=', 'companies.id')
            ->select('employees.*', 'companies.name AS company_name')

            ->get();
        $companies = Company::all();

        return view('business.employees', compact('employees', 'companies'));
    }
    public function create(Request $request)
    {

        //dd($request->all());
        //dd($request->except('_token'));
        $requestData = $request->all();
        $employee = new Employee();
        $employee->name = $requestData['name'];
        $employee->company_id = $requestData['company_id'];
        $employee->save();
        return back();
    }
    public function edit($id){
            $employee=Employee::find($id);
            $companies = Company::all();
            $company_name=(Employee::find($id)->company)['name'];
            return view('business.editEmployee',compact('employee','company_name','companies'));

    }
    public function update($id, Request $request){
        $employee=Employee::find($id);
        $requestData = $request->all();
        $employee->name = $requestData['name'];
        $employee->company_id = $requestData['company_id'];
        $employee->save();
        return redirect('/employees');
    }
    public function destroy($id)
    {

        $employee=Employee::find($id);
        $employee->delete($id);
        return redirect('/employees');
    }
}
