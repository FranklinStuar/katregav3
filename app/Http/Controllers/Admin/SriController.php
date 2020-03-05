<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SriController extends Controller
{
    public function edit(){
        $sri = \Auth::user()->company()->sri;
        return view('sri.edit',compact('sri'));
    }
    public function update(Request $request){
        $sri = \Auth::user()->company()->sri;
        $sri->update($request->all());
        return redirect()->back()
        ->with('success','Sri actualizada');
    }
}