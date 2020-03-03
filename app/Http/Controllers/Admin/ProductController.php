<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Product;
use App\Models\Stock;
use Auth;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function index(){
        $products = Auth::user()->company()->products;
        return view('products.index',compact('products'));
    }

    public function create(){
        $product = new Product;
        $product->stock = new Stock;
        $product->stock->price_1 = 0;
        $product->stock->price_2 = 0;
        $product->stock->price_3 = 0;
        $product->stock->price_4 = 0;
        $product->stock->price_5 = 0;
        $product->stock->tax = true;
        $product->stock->seller = true;
        $product->stock->purchase = true;
        $product->stock->disscount_fix = 0;
        $product->stock->disscount_special = 0;
        // $product->stock->init_special = Carbon::now()->format('Y-m-d');
        $measurements = Auth::user()->company()->measurements;
        $groups = Auth::user()->company()->groups;
        $marks = Auth::user()->company()->marks;
        $lines = Auth::user()->company()->lines;
        
        return view('products.create',
        compact('product','measurements','groups','marks','lines'));
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
        $data = $request->all();
        $data['stock_id'] = $stock->id;
        $product = Product::create($data);
        return redirect()->route('products.index')
        ->with('success','Nuevo Producto guardado');
    }
    public function edit($id){
        $product = Product::find($id);
        $measurements = Auth::user()->company()->measurements;
        $groups = Auth::user()->company()->groups;
        $marks = Auth::user()->company()->marks;
        $lines = Auth::user()->company()->lines;
        
        return view('products.edit',compact('product','measurements','groups','marks','lines'));
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
        $product = Product::find($id);
        // dd($request->all(),$init_special,$finish_special);
        $product->stock->update([
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
        
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Producto actualizado');
    }

    public function destroy($id){
        $product = Product::find($id);
        if($product->delete())
            return response()->json(['message'=> "Producto eliminado correctamente",'url'=> route('products.index')]);
        return response()->json(['message' => "Producto no eliminado"],403);
    }

}