<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Auth;

class ClientController extends Controller
{
    public function index(){
        $clients = Auth::user()->company()->clients;
        return view('clients.index',compact('clients'));
    }

    public function create(){
        $client = new Client;
        return view('clients.create',compact('client'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['company_id'] = Auth::user()->company()->id;
        $client = Client::create($data);
        return redirect()->route('clients.index')
        ->with('success','Nuevo Cliente guardado');
    }
    public function edit($id){
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }
    public function update(Request $request,$id){
        $client = Client::find($id);
        $client->update($request->all());
        return redirect()->route('clients.index')
        ->with('success','Cliente actualizado');
    }

    public function destroy($id){
        $client = Client::find($id);
        if($client->delete())
            return response()->json(['message'=> "Cliente eliminado correctamente",'url'=> route('clients.index')]);
        return response()->json(['message' => "Cliente no eliminado"],403);
    }

}