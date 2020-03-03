@extends('layouts.app')

@section('title-top')
    Editar Cliente
@endsection

@section('title-body')
    Editar Cliente
@endsection

@section('content')

  <div class="card card-primary">
    @include('clients.form',['url'=>route('clients.update',$client->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
