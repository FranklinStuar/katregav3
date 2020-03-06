<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retention;
use Auth;

class RetentionController extends Controller
{
    public function index(){
        $retentions = Auth::user()->company()->retentions;
        return view('retentions.index',compact('retentions'));
    }

    public function create(){
        $retention = new Retention;
        return view('retentions.create',compact('retention'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['company_id'] = Auth::user()->company()->id;
        $client = Retention::create($data);
        return redirect()->route('retentions.index')
        ->with('success','Nueva retención guardada');
    }
    public function edit($id){
        $retention = Retention::find($id);
        return view('retentions.edit',compact('retention'));
    }
    public function update(Request $request,$id){
        $retention = Retention::find($id);
        $retention->update($request->all());
        return redirect()->route('retentions.index')
        ->with('success','Retención actualizada');
    }

    public function destroy($id){
        $retention = Retention::find($id);
        if($retention->delete())
            return response()->json(['message'=> "Retención eliminado correctamente",'url'=> route('retentions.index')]);
        return response()->json(['message' => "Retención no eliminado"],403);
    }

}