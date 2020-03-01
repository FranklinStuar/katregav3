<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Measurement;
use Auth;


class MeasurementController extends Controller
{
    public function index(){
        $measurements = Auth::user()->company()->measurements;
        return view('measurements.index',compact('measurements'));
    }

    public function create(){
        $measurement = new Measurement;
        return view('measurements.create',compact('measurement'));
    }
    public function store(Request $request){
        $measurement = Measurement::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('measurements.index')
        ->with('success','Nueva unidad de medida guardada');
    }
    public function edit($id){
        $measurement = Measurement::find($id);
        return view('measurements.edit',compact('measurement'));
    }
    public function update(Request $request,$id){
        $measurement = Measurement::find($id);
        $measurement->update($request->all());
        return redirect()->route('measurements.index')
        ->with('success','Unidad de medida actualizada');
    }

    public function destroy($id){
        $measurement = Measurement::find($id);
        if($measurement->delete())
            return response()->json(['message'=> "Unidad de medida eliminado correctamente",'url'=> route('measurements.index')]);
        return response()->json(['message' => "Unidad de medida no eliminado"],403);
    }

}