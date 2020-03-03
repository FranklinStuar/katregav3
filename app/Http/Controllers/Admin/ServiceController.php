<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Stock;
use App\Models\Measurement;
use App\Models\ProductGroup;
use Auth;
use Carbon\Carbon;


class ServiceController extends Controller
{
    public function index(){
        $services = Auth::user()->company()->services;
        return view('services.index',compact('services'));
    }
    public function create(){
        $service = new Service;
        $service->stock = new Stock;
        $service->stock->price_1 = 0;
        $service->stock->price_2 = 0;
        $service->stock->price_3 = 0;
        $service->stock->price_4 = 0;
        $service->stock->price_5 = 0;
        $service->stock->tax = true;
        $service->stock->seller = true;
        $service->stock->purchase = true;
        $service->stock->disscount_fix = 0;
        $service->stock->disscount_special = 0;
        // $service->stock->init_special = Carbon::now()->format('Y-m-d');
        $measurements = Auth::user()->company()->measurements;
        $groups = Auth::user()->company()->groups;
        // dd($service,$measurements,$groups);
        
        return view('services.create',
        compact('service','measurements','groups'));
    }
    public function store(Request $request){
        $init_special = null;
        $finish_special = null;
        if($request->init_special && $request->finish_special){
            list($anioInit, $mesInit, $diaInit) = explode("-", $request->init_special);
            list($anioFinish, $mesFinish, $diaFinish) = explode("-", $request->finish_special);
            $init_special = Carbon::create($anioInit, $mesInit, $diaInit);
            $finish_special = Carbon::create($anioFinish, $mesFinish, $diaFinish);
        }
        // dd($request->all(),$init_special,$finish_special);
        $stock = Stock::create([
            'code' => $request->code,
            'name' => $request->name,
            'alternative_name' => $request->alternative_name,
            'disscount_fix' => $request->disscount_fix,
            'tax' => $request->tax,
            'seller' => ($request->seller)?true:false,
            'purchase' => ($request->purchase)?true:false,
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
            'price_4' => $request->price_4,
            'price_5' => $request->price_5,
            'init_special' => $init_special,
            'finish_special' => $finish_special,
            'disscount_special' => $request->disscount_special,
            'product_group_id' => $request->product_group_id,
            'measurement_id' => $request->measurement_id,
            'company_id' => Auth::user()->company()->id
        ]);
        $service = Service::create(['stock_id' => $stock->id]);
        return redirect()->route('services.index')
        ->with('success','Nuevo Servicio guardado');
    }
    public function edit($id){
        $service = Service::find($id);
        $measurements = Auth::user()->company()->measurements;
        $groups = Auth::user()->company()->groups;
        // dd($service,$measurements,$groups);
        
        return view('services.edit',compact('service','measurements','groups'));
    }
    public function update(Request $request,$id){
        $init_special = null;
        $finish_special = null;
        if($request->init_special && $request->finish_special){
            list($anioInit, $mesInit, $diaInit) = explode("-", $request->init_special);
            list($anioFinish, $mesFinish, $diaFinish) = explode("-", $request->finish_special);
            $init_special = Carbon::create($anioInit, $mesInit, $diaInit);
            $finish_special = Carbon::create($anioFinish, $mesFinish, $diaFinish);
        }
        $service = Service::find($id);
        $service->stock->update([
            'code' => $request->code,
            'name' => $request->name,
            'alternative_name' => $request->alternative_name,
            'disscount_fix' => $request->disscount_fix,
            'tax' => $request->tax,
            'seller' => ($request->seller)?true:false,
            'purchase' => ($request->purchase)?true:false,
            'price_1' => $request->price_1,
            'price_2' => $request->price_2,
            'price_3' => $request->price_3,
            'price_4' => $request->price_4,
            'price_5' => $request->price_5,
            'active' => $request->active,
            'init_special' => $init_special,
            'finish_special' => $finish_special,
            'disscount_special' => $request->disscount_special,
            'product_group_id' => $request->product_group_id,
            'measurement_id' => $request->measurement_id,
        ]);
        return redirect()->route('services.index')
        ->with('success','Servicio actualizado');
    }

    public function destroy($id){
        $service = Service::find($id);
        if($service->delete())
            return response()->json(['message'=> "Servicio eliminado correctamente",'url'=> route('services.index')]);
        return response()->json(['message' => "Servicio no eliminado"],403);
    }

}