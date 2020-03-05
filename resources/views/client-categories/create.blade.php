@extends('layouts.app')

@section('title-top')
    Nueva categoría de clientes
@endsection

@section('title-body')
    Nueva categoría de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-categories.form',['url'=>route('client-categories.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
