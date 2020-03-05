@extends('layouts.app')

@section('title-top')
    Editar Proveedor
@endsection

@section('title-body')
    Editar Proveedor
@endsection

@section('content')

  <div class="card card-primary">
    @include('employees.form',['url'=>route('employees.update',$employee->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
