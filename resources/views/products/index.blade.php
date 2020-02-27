@extends('layouts.app')

@section('title-top')
    Productos
@endsection

@section('title-body')
    Productos
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('products.create')}}" class="btn btn-default btn-sm">Nuevo producto</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>User</th>
          <th>Date</th>
          <th>Status</th>
          <th>Reason</th>
        <tr>
          <th>ID</th>
          <th>User</th>
          <th>Date</th>
          <th>Status</th>
          <th>Reason</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>183</td>
          <td>John Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-success">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection
