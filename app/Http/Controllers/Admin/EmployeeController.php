<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Auth;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Auth::user()->company()->employees;
        return view('employees.index',compact('employees'));
    }
    public function create(){
        $employee = new Employee;
        $employee->journal = 1;
        $employee->salary = 0;
        $employee->journal = 1;
        return view('employees.create',compact('employee'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['company_id'] = Auth::user()->company()->id;
        $employee = Employee::create($data);
        return redirect()->route('employees.index')
        ->with('success','Nuevo empleado guardado');
    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('employees.edit',compact('employee'));
    }
    public function update(Request $request,$id){
        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')
        ->with('success','Empleado actualizado');
    }

    public function destroy($id){
        $employee = Employee::find($id);
        if($employee->delete())
            return response()->json(['message'=> "Empleado eliminado correctamente",'url'=> route('employees.index')]);
        return response()->json(['message' => "Empleado no eliminado"],403);
    }

}