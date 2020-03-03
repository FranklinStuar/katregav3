@extends('layouts.app')

@section('title-top')
  Nuevo Servicio
@endsection

@section('title-body')
  Nuevo Servicio
@endsection

@section('content')

  <div class="card card-primary">
    @include('services.form',['url'=>route('services.store'),'edit'=> false])    
  </div>

@endsection
