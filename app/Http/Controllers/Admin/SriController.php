<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SriController extends Controller
{
    public function edit(){
        $sri = \Auth::user()->company()->sri;
        $fontRetentions = \Auth::user()->company()->retentions->where('destine','font');
        $taxRetentions = \Auth::user()->company()->retentions->where('destine','tax');
        return view('sri.edit',compact('sri','fontRetentions','taxRetentions'));
    }
    public function update(Request $request){
        $sri = \Auth::user()->company()->sri;
        $data = $request->all();
        $data['retention_font'] = ($request->retention_font=='none')?null:$request->retention_font;
        $data['retention_tax'] = ($request->retention_tax=='none')?null:$request->retention_tax;
        $sri->update($data);
        return redirect()->back()
        ->with('success','Sri actualizada');
    }
}