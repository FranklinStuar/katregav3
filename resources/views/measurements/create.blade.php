@extends('layouts.app')

@section('title-top')
    Nueva Unidad de medida
@endsection

@section('title-body')
    Nueva Unidad de medida
@endsection

@section('content')

  <div class="card card-primary">
    @include('measurements.form',['url'=>route('measurements.store'),'edit'=> false])    
  </div>

@endsection
