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
        $types = Auth::user()->company()->providerTypes;
        return view('providers.create',compact('provider','types','retentions'));
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
        $types = Auth::user()->company()->providerTypes;        
        return view('providers.edit',compact('provider','types'));
    }
    public function update(Request $request,$id){
        $provider = Provider::find($id);
        
        $data = $request->all();
        $provider->update($data);
        return redirect()->route('providers.index')
        ->with('success','Proveedor actualizado');
    }

    public function destroy($id){
        $provider = Provider::find($id);
        if($provider->delete())
            return response()->json(['message'=> "Proveedor eliminado correctamente",'url'=> route('providers.index')]);
        return response()->json(['message' => "Proveedor no eliminado"],403);
    }

    public function retentionIndex($id){
        $provider = Provider::find($id);
        $retentions = \Auth::user()->company()->retentions->whereNotIn('id',$provider->retentions->pluck('id'));
        return view('providers.providers-retentions',compact('provider','retentions'));
    }

    public function addRetention(Request $request,$id){
        $provider = Provider::find($id);
        $provider->retentions()->attach($request->retention_id);
        return redirect()->back()
        ->with('success','Retención agregada');
    }

    public function removeRetention($id,$retention_id){
        $provider = Provider::find($id);
        $provider->retentions()->detach($retention_id);
            return response()->json(['message'=> "Retención eliminada",'url'=> route('providers.retentions')]);
    }

}