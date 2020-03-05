@extends('layouts.app')

@section('title-top')
    Editar tipo de clientes
@endsection

@section('title-body')
    Editar tipo de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-types.form',['url'=>route('client-types.update',$type->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
