@extends('layouts.app')

@section('title-top')
    Editar zona de clientes
@endsection

@section('title-body')
    Editar zona de clientes
@endsection

@section('content')

  <div class="card card-primary">
    @include('client-zones.form',['url'=>route('client-zones.update',$zone->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
