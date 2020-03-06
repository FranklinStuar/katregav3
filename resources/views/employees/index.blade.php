@extends('layouts.app')

@section('title-top')
    Empleados
@endsection

@section('title-body')
    Empleados
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('employees.create')}}" class="btn btn-default btn-sm">Nuevo Empleado</a>
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
          <th>Salario</th>
          <th>Puesto</th>
          <th>Tipo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
          <tr>
            <td>
              @if ($employee->active)
                <i class="fas fa-circle green-text"></i>
              @else
                <i class="fas fa-circle red-text"></i>
              @endif
            </td>
            <td>
              {{$employee->identification}}
            </td>
            <td>
              @if ($employee->type_identification == 'ruc') RUC
              @elseif ($employee->type_identification == 'rise') RISE
              @endif
            </td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->address}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->movile}}</td>
            <td>{{$employee->email}}</td>
            <td>$ {{$employee->salary}}</td>
            <td>{{$employee->charge}}</td>
            <td>@if($employee->type) {{$employee->type->name}} @endif</td>
            <td>
              <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('employees.destroy',$employee->id)}}',
                        '{{$employee->name}}'
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
