@extends('layouts.app')

@section('title-top')
    Editar tipo de empleados
@endsection

@section('title-body')
    Editar tipo de empleados
@endsection

@section('content')

  <div class="card card-primary">
    @include('employee-types.form',['url'=>route('employee-types.update',$type->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
