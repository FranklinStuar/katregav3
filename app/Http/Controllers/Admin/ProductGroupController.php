<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGroup as Grupo;
use Auth;

class ProductGroupController extends Controller
{
    public function index(){
        $groups = Auth::user()->employee->company->groups;
        return view('product-groups.index',compact('groups'));
    }

    public function create(){
        $group = new Grupo;
        return view('product-groups.create',compact('group'));
    }
    public function store(Request $request){
        $group = Grupo::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('groups.index')
        ->with('success','Nuevo grupo de productos y servicios guardado');
    }
    public function edit($id){
        $group = Grupo::find($id);
        return view('product-groups.edit',compact('group'));
    }
    public function update(Request $request,$id){
        $group = Grupo::find($id);
        $group->update($request->all());
        return redirect()->route('groups.index')
        ->with('success','Grupo de productos y servicios actualizado');
    }

    public function destroy($id){
        $group = Grupo::find($id);
        if($group->delete())
            return response()->json(['message'=> "Grupo de productos y servicios eliminado correctamente",'url'=> route('groups.index')]);
        return response()->json(['message' => "Grupo de productos no eliminado"],403);
    }

}
