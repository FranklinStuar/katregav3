@extends('layouts.app')

@section('title-top')
    Grupo de Productos
@endsection

@section('title-body')
    Grupo de Productos
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('products.create')}}" class="btn btn-default btn-sm">Nuevo Grupo</a>
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
        @foreach ($groups as $group)
          <tr>
            <td>{{$group->name}}</td>
            <td>
              <a href="{{route('groups.show',$group->id)}}" class="btn btn-primary">Ver</a>
              <a href="{{route('groups.edit',$group->id)}}" class="btn btn-info">Editar</a>
              <form action="{{route('groups.destroy',$group->id)}}" method="post">
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
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
