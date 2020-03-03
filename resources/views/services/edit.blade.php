@extends('layouts.app')

@section('title-top')
    Editar servicio
@endsection

@section('title-body')
    Editar servicio
@endsection

@section('content')

  <div class="card card-primary">
    @include('services.form',['url'=>route('services.update',$service->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
