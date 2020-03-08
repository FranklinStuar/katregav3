<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SriController extends Controller
{
    public function edit(){
        $sri = \Auth::user()->company()->sri;
        $retentions = \Auth::user()->company()->retentions->whereNotIn('id',$sri->company->retentionsIntern->pluck('id'));

        return view('sri.edit',compact('sri','retentions'));
    }
    public function update(Request $request){
        $sri = \Auth::user()->company()->sri;
        $data = $request->all();
        $sri->update($data);
        return redirect()->back()
        ->with('success','Sri actualizada');
    }

    public function addRetention(Request $request){
        $sri = \Auth::user()->company()->sri;
        $sri->company->retentionsIntern()->attach($request->retention_id);
        return redirect()->back()
        ->with('success','Retención agregada');
    }

    public function removeRetention($id){
        $sri = \Auth::user()->company()->sri;
        $sri->company->retentionsIntern()->detach($id);
            return response()->json(['message'=> "Retención eliminada",'url'=> route('sri.edit')]);
    }

}