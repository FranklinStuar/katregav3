@extends('layouts.app')

@section('title-top')
    Editar {{$company->name}}
@endsection

@section('title-body')
    Editar {{$company->name}}
@endsection

@section('content')

  <div class="card card-primary">
    @include('company.form',['url'=>route('company.update'),'edit'=> true])    
  </div>
  <!-- /.card -->

@endsection
