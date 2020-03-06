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
        $fontRetentions = Auth::user()->company()->retentions->where('destine','font');
        $taxRetentions = Auth::user()->company()->retentions->where('destine','tax');
        return view('providers.create',compact('provider','types','fontRetentions','taxRetentions'));
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
        $fontRetentions = Auth::user()->company()->retentions->where('destine','font');
        $taxRetentions = Auth::user()->company()->retentions->where('destine','tax');
        return view('providers.edit',compact('provider','types','fontRetentions','taxRetentions'));
    }
    public function update(Request $request,$id){
        $provider = Provider::find($id);
        
        $data = $request->all();
        $data['retention_font'] = ($request->retention_font=='none')?null:$request->retention_font;
        $data['retention_tax'] = ($request->retention_tax=='none')?null:$request->retention_tax;
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

}