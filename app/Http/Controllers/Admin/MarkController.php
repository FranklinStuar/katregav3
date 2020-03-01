<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mark;
use Auth;

class MarkController extends Controller
{
    public function index(){
        $marks = Auth::user()->company()->marks;
        return view('marks.index',compact('marks'));
    }

    public function create(){
        $mark = new Mark;
        return view('marks.create',compact('mark'));
    }
    public function store(Request $request){
        $mark = Mark::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('marks.index')
        ->with('success','Nueva marca de productos y servicios guardada');
    }
    public function edit($id){
        $mark = Mark::find($id);
        return view('marks.edit',compact('mark'));
    }
    public function update(Request $request,$id){
        $mark = Mark::find($id);
        $mark->update($request->all());
        return redirect()->route('marks.index')
        ->with('success','Marca de productos y servicios actualizada');
    }

    public function destroy($id){
        $mark = Mark::find($id);
        if($mark->delete())
            return response()->json(['message'=> "Marca de productos y servicios eliminado correctamente",'url'=> route('marks.index')]);
        return response()->json(['message' => "Marca de productos no eliminado"],403);
    }

}

