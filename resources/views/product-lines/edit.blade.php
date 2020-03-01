@extends('layouts.app')

@section('title-top')
    Editar linea de producto de producto
@endsection

@section('title-body')
    Editar linea de producto de productos
@endsection

@section('content')

  <div class="card card-primary">
    @include('product-lines.form',['url'=>route('lines.update',$line->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
