<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductLine;
use Auth;

class ProductLineController extends Controller
{
    public function index(){
        $lines = Auth::user()->company()->lines;
        return view('product-lines.index',compact('lines'));
    }

    public function create(){
        $line = new ProductLine;
        return view('product-lines.create',compact('line'));
    }
    public function store(Request $request){
        $line = ProductLine::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('lines.index')
        ->with('success','Nueva marca de productos y servicios guardada');
    }
    public function edit($id){
        $line = ProductLine::find($id);
        return view('product-lines.edit',compact('line'));
    }
    public function update(Request $request,$id){
        $line = ProductLine::find($id);
        $line->update($request->all());
        return redirect()->route('lines.index')
        ->with('success','Marca de productos y servicios actualizada');
    }

    public function destroy($id){
        $line = ProductLine::find($id);
        if($line->delete())
            return response()->json(['message'=> "Marca de productos y servicios eliminado correctamente",'url'=> route('lines.index')]);
        return response()->json(['message' => "Marca de productos no eliminado"],403);
    }

}