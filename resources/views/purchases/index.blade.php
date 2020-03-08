@extends('layouts.app')

@section('title-top')
    Compras
@endsection

@section('title-body')
    Compras
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('purchases.create')}}" class="btn btn-default btn-sm">Nueva compra</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>#</th>
          <th>Fecha</th>
          <th>Proveedor</th>
          <th># Doc.</th>
          <th></th> {{-- Tipo de documento --}}
          <th>Total</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($purchases as $purchase)
          <tr>
            <td>{{$purchase->code}}</td>
            <td>{{$purchase->date}}</td>
            <td>{{$purchase->provider->name}}</td>
            <td>{{$purchase->bill}}</td>
            <td>
                @if ($purchase->type_document == 'bill') F
                @elseif ($purchase->type_document == 'note') N
                @endif
            </td>
            <td>{{$purchase->transaction->total}}</td>
            <td>
                <a href="{{route('purchases.edit',$purchase->id)}}" class="btn btn-sm btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection
