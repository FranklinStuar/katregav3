@extends('layouts.app')

@section('title-top')
    Editar grupo de producto
@endsection

@section('title-body')
    Editar grupo de productos
@endsection

@section('content')

  <div class="card card-primary">
    @include('product-groups.form',['url'=>route('groups.update',$group->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
