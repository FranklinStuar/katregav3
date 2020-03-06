@extends('layouts.app')

@section('title-top')
    Editar Retención
@endsection

@section('title-body')
    Editar Retención
@endsection

@section('content')

  <div class="card card-primary">
    @include('retentions.form',['url'=>route('retentions.update',$retention->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
