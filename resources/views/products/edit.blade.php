@extends('layouts.app')

@section('title-top')
    Editar producto
@endsection

@section('title-body')
    Editar producto
@endsection

@section('content')

  <div class="card card-primary">
    @include('products.form',['url'=>route('products.update',$product->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
