@extends('layouts.app')

@section('title-top')
    Unidades de Medida
@endsection

@section('title-body')
    Unidades de Medida
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('measurements.create')}}" class="btn btn-default btn-sm">Nueva Medida de producto</a>
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
        @foreach ($measurements as $measurement)
          <tr>
            <td>{{$measurement->name}}</td>
            <td>
              <a href="{{route('measurements.edit',$measurement->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('measurements.destroy',$measurement->id)}}',
                        '{{$measurement->name}}'
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
