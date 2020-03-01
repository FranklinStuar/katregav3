@extends('layouts.app')

@section('title-top')
    Lineas de Productos
@endsection

@section('title-body')
    Lineas de Productos
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('lines.create')}}" class="btn btn-default btn-sm">Nueva Linea</a>
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
        @foreach ($lines as $line)
          <tr>
            <td>{{$line->name}}</td>
            <td>
              <a href="{{route('lines.edit',$line->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('lines.destroy',$line->id)}}',
                        '{{$line->name}}'
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
