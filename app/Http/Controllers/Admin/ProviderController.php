<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use Auth;


class ProviderController extends Controller
{
    public function index(){
        $providers = Auth::user()->company()->providers;
        return view('providers.index',compact('providers'));
    }

    public function create(){
        $provider = new Provider;
        return view('providers.create',compact('provider'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['company_id'] = Auth::user()->company()->id;
        $provider = Provider::create($data);
        return redirect()->route('providers.index')
        ->with('success','Nuevo proveedor guardado');
    }
    public function edit($id){
        $provider = Provider::find($id);
        return view('providers.edit',compact('provider'));
    }
    public function update(Request $request,$id){
        $provider = Provider::find($id);
        $provider->update($request->all());
        return redirect()->route('providers.index')
        ->with('success','Proveedor actualizado');
    }

    public function destroy($id){
        $provider = Provider::find($id);
        if($provider->delete())
            return response()->json(['message'=> "Proveedor eliminado correctamente",'url'=> route('providers.index')]);
        return response()->json(['message' => "Proveedor no eliminado"],403);
    }

}