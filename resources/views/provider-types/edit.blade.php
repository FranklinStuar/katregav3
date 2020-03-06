@extends('layouts.app')

@section('title-top')
    Editar tipo de proveedores
@endsection

@section('title-body')
    Editar tipo de proveedores
@endsection

@section('content')

  <div class="card card-primary">
    @include('provider-types.form',['url'=>route('provider-types.update',$type->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
