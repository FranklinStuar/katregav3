@extends('layouts.app')

@section('title-top')
    Nuevo tipo de empleados
@endsection

@section('title-body')
    Nuevo tipo de empleados
@endsection

@section('content')

  <div class="card card-primary">
    @include('employee-types.form',['url'=>route('employee-types.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
