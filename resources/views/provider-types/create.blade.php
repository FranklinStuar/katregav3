@extends('layouts.app')

@section('title-top')
    Nuevo tipo de proveedores
@endsection

@section('title-body')
    Nuevo tipo de proveedores
@endsection

@section('content')

  <div class="card card-primary">
    @include('provider-types.form',['url'=>route('provider-types.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
