<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeEmployee as Type;
use Auth;

class TypeEmployeeController extends Controller
{
    public function index(){
        $types = Auth::user()->company()->employeeTypes;
        return view('employee-types.index',compact('types'));
    }

    public function create(){
        $type = new Type;
        return view('employee-types.create',compact('type'));
    }
    public function store(Request $request){
        $type = Type::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('employee-types.index')
        ->with('success','Nuevo tipo de empleado guardado');
    }
    public function edit($id){
        $type = Type::find($id);
        return view('employee-types.edit',compact('type'));
    }
    public function update(Request $request,$id){
        $type = Type::find($id);
        $type->update($request->all());
        return redirect()->route('employee-types.index')
        ->with('success','Tipo de empleado actualizado');
    }

    public function destroy($id){
        $type = Type::find($id);
        if($type->delete())
            return response()->json(['message'=> "Tipo de empleado eliminado correctamente",'url'=> route('employee-types.index')]);
        return response()->json(['message' => "Tipo de empleado no eliminado"],403);
    }

}