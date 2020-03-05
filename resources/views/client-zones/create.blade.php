@extends('layouts.app')

@section('title-top')
    Nueva zona de clientes
@endsection

@section('title-body')
    Nueva zona de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-zones.form',['url'=>route('client-zones.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
