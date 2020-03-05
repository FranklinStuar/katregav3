<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryClient as Category;
use Auth;


class CategoryClientController extends Controller
{
    public function index(){
        $categories = Auth::user()->company()->clientCategories;
        return view('client-categories.index',compact('categories'));
    }

    public function create(){
        $category = new Category;
        return view('client-categories.create',compact('category'));
    }
    public function store(Request $request){
        $category = Category::create([
            'name' => $request->name,
            'company_id' => Auth::user()->company()->id
        ]);
        return redirect()->route('client-categories.index')
        ->with('success','Nueva categoría de cliente guardada');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('client-categories.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('client-categories.index')
        ->with('success','Categoría de cliente actualizada');
    }

    public function destroy($id){
        $category = Category::find($id);
        if($category->delete())
            return response()->json(['message'=> "Categoría de cliente eliminado correctamente",'url'=> route('client-categories.index')]);
        return response()->json(['message' => "Categoría de cliente no eliminado"],403);
    }

}