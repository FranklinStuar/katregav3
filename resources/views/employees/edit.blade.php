@extends('layouts.app')

@section('title-top')
    Editar Proveedor
@endsection

@section('title-body')
    Editar Proveedor
@endsection

@section('content')

  <div class="card card-primary">
    @include('providers.form',['url'=>route('providers.update',$provider->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
