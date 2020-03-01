@extends('layouts.app')

@section('title-top')
    Nueva linea de producto
@endsection

@section('title-body')
    Nueva linea de productos
@endsection

@section('content')

  <div class="card card-primary">
    @include('product-lines.form',['url'=>route('lines.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
