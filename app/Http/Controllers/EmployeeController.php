<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function view(){
        $getEmployee = Employee::all();
        return view('employee.employee-show', compact('getEmployee'));
    }

    public function add(){
        return view('employee.employee-add');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'address' => 'required',
        ]);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->designtaion = $request->designation;
        $employee->address = $request->address;
        $employee->save();
        return redirect()->route('employee.view');
    }

}
