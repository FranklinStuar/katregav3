<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = \Auth::user()->employee->company->products;
        return view('products.index',compact('products'));
    }

    public function create(){
        $product = new Product;
        return view('products.create',compact('product'));
    }
    
}
