<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Company;
use Auth;

class CompanyController extends Controller
{
    public function edit(){
        $company = Auth::user()->company();
        return view('company.edit',compact('company'));
    }
    public function update(Request $request){
        $company = Auth::user()->company();
        $company->update($request->all());
        return redirect()->back()
        ->with('success','Empresa actualizada');
    }
}