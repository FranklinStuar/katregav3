@extends('layouts.app')

@section('title-top')
    Zona de clientes
@endsection

@section('title-body')
    Zona de clientes
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('client-zones.create')}}" class="btn btn-default btn-sm">Nueva Zona</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($zones as $zone)
          <tr>
            <td>{{$zone->name}}</td>
            <td>
              <a href="{{route('client-zones.edit',$zone->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('client-zones.destroy',$zone->id)}}',
                        '{{$zone->name}}'
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
