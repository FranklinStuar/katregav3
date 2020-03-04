@extends('layouts.app')

@section('title-top')
    Nuevo proveedor
@endsection

@section('title-body')
    Nuevo proveedor
@endsection

@section('content')

  <div class="card card-primary">
    @include('providers.form',['url'=>route('providers.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
