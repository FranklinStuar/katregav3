@extends('layouts.app')

@section('title-top')
    Nuevo cliente
@endsection

@section('title-body')
    Nuevo cliente
@endsection

@section('content')

  <div class="card card-primary">
    @include('clients.form',['url'=>route('clients.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
