<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;

use App\Models\Vendor;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();

        $search = request()->query('search');

        if($search){
            $employee=Employee::where('EmployeeID', 'LIKE',"%{$search}%")->simplePaginate(3);
        }else{
            $employee=Employee::simplePaginate(3);
        }

        return view('employees.index', ['employee'=>$employee]);
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request)
    {

        $employees= new Employee();
        $employees->EmployeeID = request('EmployeeID');
        $employees->Name = request('Name');
        $employees->save();

        return redirect('employees/index');
    }
}
