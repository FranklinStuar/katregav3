@extends('layouts.app')

@section('title-top')
    Nueva retención
@endsection

@section('title-body')
    Nueva retención
@endsection

@section('content')

  <div class="card card-primary">
    @include('retentions.form',['url'=>route('retentions.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
