@extends('layouts.app')

@section('title-top')
    Nuevo grupo de producto
@endsection

@section('title-body')
    Nuevo grupo de productos
@endsection

@section('content')

<div class="card card-primary">
    <!-- form start -->
    
    <form role="form" action="{{route('groups.store')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nombre del grupo</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del grupo">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

@endsection
