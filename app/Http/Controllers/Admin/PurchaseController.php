<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Provider;
use Auth;
use DB;
use Carbon\Carbon;


class PurchaseController extends Controller
{
    public function index(){
        $purchases = Auth::user()->company()->purchases;
        return view('purchases.index',compact('purchases'));
    }

    public function create(){
        $purchase = new Purchase;
        $purchase->provider = new Provider;
        $purchase->date = Carbon::now();
        return view('purchases.create',compact('purchase'));
    }
    public function store(Request $request){
        $purchase = Purchase::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('purchases.index')
        ->with('success','Nueva marca de productos y servicios guardada');
    }
    public function edit($id){
        $purchase = Purchase::find($id);
        return view('purchases.edit',compact('purchase'));
    }
    public function update(Request $request,$id){
        $purchase = Purchase::find($id);
        $purchase->update($request->all());
        return redirect()->route('purchases.index')
        ->with('success','Marca de productos y servicios actualizada');
    }

    public function destroy($id){
        $purchase = Purchase::find($id);
        if($purchase->delete())
            return response()->json(['message'=> "Marca de productos y servicios eliminado correctamente",'url'=> route('purchases.index')]);
        return response()->json(['message' => "Marca de productos no eliminado"],403);
    }

}