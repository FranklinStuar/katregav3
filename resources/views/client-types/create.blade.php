@extends('layouts.app')

@section('title-top')
    Nuevo tipo de clientes
@endsection

@section('title-body')
    Nuevo tipo de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-types.form',['url'=>route('client-types.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
