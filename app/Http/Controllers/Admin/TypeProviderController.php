<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeProvider as Type;
use Auth;


class TypeProviderController extends Controller
{
    public function index(){
        $types = Auth::user()->company()->providerTypes;
        return view('provider-types.index',compact('types'));
    }

    public function create(){
        $type = new Type;
        return view('provider-types.create',compact('type'));
    }
    public function store(Request $request){
        $type = Type::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('provider-types.index')
        ->with('success','Nuevo tipo de proveedor guardado');
    }
    public function edit($id){
        $type = Type::find($id);
        return view('provider-types.edit',compact('type'));
    }
    public function update(Request $request,$id){
        $type = Type::find($id);
        $type->update($request->all());
        return redirect()->route('provider-types.index')
        ->with('success','Tipo de proveedor actualizado');
    }

    public function destroy($id){
        $type = Type::find($id);
        if($type->delete())
            return response()->json(['message'=> "Tipo de proveedor eliminado correctamente",'url'=> route('provider-types.index')]);
        return response()->json(['message' => "Tipo de proveedor no eliminado"],403);
    }

}