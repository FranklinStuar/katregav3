@extends('layouts.app')

@section('title-top')
    Tipo de empleados
@endsection

@section('title-body')
    Tipo de empleados
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('employee-types.create')}}" class="btn btn-default btn-sm">Nuevo Tipo</a>
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
        @foreach ($types as $type)
          <tr>
            <td>{{$type->name}}</td>
            <td>
              <a href="{{route('employee-types.edit',$type->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('employee-types.destroy',$type->id)}}',
                        '{{$type->name}}'
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
