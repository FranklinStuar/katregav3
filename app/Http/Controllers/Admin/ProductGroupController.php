<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGroup as Grupo;

class ProductGroupController extends Controller
{
    public function index(){
        $groups = \Auth::user()->employee->company->groups;
        return view('product-groups.index',compact('groups'));
    }

    public function create(){
        $group = new Grupo;
        return view('product-groups.create',compact('group'));
    }
    public function store(){
        $group = Grupo::create($request->group);
        return view('product-groups.create',compact('group'));
    }
    
}
