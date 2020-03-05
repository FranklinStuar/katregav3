@extends('layouts.app')

@section('title-top')
    Editar categoría de clientes
@endsection

@section('title-body')
    Editar categoría de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-categories.form',['url'=>route('client-categories.update',$category->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
