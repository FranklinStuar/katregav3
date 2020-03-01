@extends('layouts.app')

@section('title-top')
    Editar Marca
@endsection

@section('title-body')
    Editar Marca
@endsection

@section('content')

  <div class="card card-primary">
    @include('marks.form',['url'=>route('marks.update',$mark->id),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
