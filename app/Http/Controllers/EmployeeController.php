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
}
