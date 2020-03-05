<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ZoneClient as Zone;
use Auth;

class ZoneClientController extends Controller
{
    public function index(){
        $zones = Auth::user()->company()->clientZones;
        return view('client-zones.index',compact('zones'));
    }

    public function create(){
        $zone = new Zone;
        return view('client-zones.create',compact('zone'));
    }
    public function store(Request $request){
        $zone = Zone::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('client-zones.index')
        ->with('success','Nueva Zona de cliente guardada');
    }
    public function edit($id){
        $zone = Zone::find($id);
        return view('client-zones.edit',compact('zone'));
    }
    public function update(Request $request,$id){
        $zone = Zone::find($id);
        $zone->update($request->all());
        return redirect()->route('client-zones.index')
        ->with('success','Tipo de cliente actualizada');
    }

    public function destroy($id){
        $zone = Zone::find($id);
        if($zone->delete())
            return response()->json(['message'=> "Zona de cliente eliminada correctamente",'url'=> route('client-zones.index')]);
        return response()->json(['message' => "Zona de cliente no eliminada"],403);
    }

}