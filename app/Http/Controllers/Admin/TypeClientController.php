<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeClient as Type;
use Auth;

class TypeClientController extends Controller
{
    public function index(){
        $types = Auth::user()->company()->clientTypes;
        return view('client-types.index',compact('types'));
    }

    public function create(){
        $type = new Type;
        return view('client-types.create',compact('type'));
    }
    public function store(Request $request){
        $type = Type::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('client-types.index')
        ->with('success','Nuevo tipo de cliente guardado');
    }
    public function edit($id){
        $type = Type::find($id);
        return view('client-types.edit',compact('type'));
    }
    public function update(Request $request,$id){
        $type = Type::find($id);
        $type->update($request->all());
        return redirect()->route('client-types.index')
        ->with('success','Tipo de cliente actualizado');
    }

    public function destroy($id){
        $type = Type::find($id);
        if($type->delete())
            return response()->json(['message'=> "Tipo de cliente eliminado correctamente",'url'=> route('client-types.index')]);
        return response()->json(['message' => "Tipo de cliente no eliminado"],403);
    }

}