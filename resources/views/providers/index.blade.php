@extends('layouts.app')

@section('title-top')
    Proveedores
@endsection

@section('title-body')
    Proveedores
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('providers.create')}}" class="btn btn-default btn-sm">Nuevo Proveedor</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th></th>
          <th>Identificación</th>
          <th></th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Celular</th>
          <th>Email</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($providers as $provider)
          <tr>
            <td>
              @if ($provider->active)
                <i class="fas fa-circle green-text"></i>
              @else
                <i class="fas fa-circle red-text"></i>
              @endif
            </td>
            <td>
              {{$provider->identification}}
            </td>
            <td>
              @if ($provider->type_identification == 'ruc') RUC
              @elseif ($provider->type_identification == 'rise') RISE
              @endif
            </td>
            <td>{{$provider->name}}</td>
            <td>{{$provider->address}}</td>
            <td>{{$provider->phone}}</td>
            <td>{{$provider->movile}}</td>
            <td>{{$provider->email}}</td>
            <td>
              <a href="{{route('providers.edit',$provider->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('providers.destroy',$provider->id)}}',
                        '{{$provider->name}}'
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
