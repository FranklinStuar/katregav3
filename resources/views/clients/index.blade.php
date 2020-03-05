@extends('layouts.app')

@section('title-top')
    Clientes
@endsection

@section('title-body')
    Clientes
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('clients.create')}}" class="btn btn-default btn-sm">Nuevo Cliente</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th></th>
          <th>Nombre</th>
          <th>Identificación</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Celular</th>
          <th>Email</th>
          <th>Cat. venta.</th>
          <th>Tipo</th>
          <th>Categoria</th>
          <th>Zona</th>
          <th>Descuento</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clients as $client)
          <tr>
            <td>
              @if ($client->active)
                <i class="fas fa-circle green-text"></i>
              @else
                <i class="fas fa-circle red-text"></i>
              @endif
            </td>
            <td>{{$client->name}}</td>
            <td>{{$client->identification}}</td>
            <td>{{$client->address}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->movile}}</td>
            <td>{{$client->email}}</td>
            <td>
              @if ($client->type_price == 1) Minorista
              @elseif ($client->type_price == 2) Mayorista
              @elseif ($client->type_price == 3) Distribuidor
              @elseif ($client->type_price == 4) Proveedor
              @elseif ($client->type_price == 5) Cliente fiel
              @endif
            </td>
            <td>@if($client->type) {{$client->type->name}} @endif</td>
            <td>@if($client->zone) {{$client->zone->name}} @endif</td>
            <td>@if($client->category) {{$client->category->name}} @endif</td>
            <td>{{$client->discount}} %</td>
            <td>
              <a href="{{route('clients.edit',$client->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('clients.destroy',$client->id)}}',
                        '{{$client->name}}'
                        )">
                    <i class="fa fa-trash"></i>
                </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection
