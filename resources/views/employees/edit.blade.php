@extends('layouts.app')

@section('title-top')
    Editar Empleado
@endsection

@section('title-body')
    Editar Empleado
@endsection

@section('content')

  <div class="card card-primary">
    @include('employees.form',['url'=>route('employees.update',$employee->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
