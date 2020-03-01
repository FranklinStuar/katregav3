@extends('layouts.app')

@section('title-top')
    Editar Unidad de medida
@endsection

@section('title-body')
    Editar Unidad de medida
@endsection

@section('content')

  <div class="card card-primary">
    @include('measurements.form',['url'=>route('measurements.update',$measurement->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
