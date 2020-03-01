@extends('layouts.app')

@section('title-top')
    Nueva marca
@endsection

@section('title-body')
    Nueva marca
@endsection

@section('content')

  <div class="card card-primary">
    @include('marks.form',['url'=>route('marks.store'),'edit'=> false])    
  </div>
  <!-- /.card -->

@endsection
