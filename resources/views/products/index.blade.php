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
      <a href="{{route('products.create')}}" class="btn btn-default btn-sm">Nuevo Producto</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th></th>
          <th>Cód.</th>
          <th>Nom.</th>
          <th>Nom. Alt</th>
          <th>IVA</th>
          <th>Destino</th>
          <th>Precios</th>
          <th>Un- Med</th>
          <th>Descuento</th>
          <th>Grupo</th>
          <th>Linea</th>
          <th>Marca</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>
              @if ($product->stock->active)
                <i class="fas fa-circle green-text"></i>
              @else
                <i class="fas fa-circle red-text"></i>
              @endif
            </td>
            <td>{{$product->stock->code}}</td>
            <td>{{$product->stock->name}}</td>
            <td>{{$product->stock->alternative_name}}</td>
            <td>
              @if ($product->stock->tax)
                <i class="fas fa-check green-text"></i>
              @else
                <i class="fas fa-times red-text"></i>
              @endif
            </td>
            <td>
              @if($product->stock->seller) Venta <br> @endif
              @if($product->stock->purchase) Compra @endif
            </td>
            <td>
              Mínimo: $ {{$product->stock->minAndMaxPrice()['min']}} <br>
              Máximo: $ {{$product->stock->minAndMaxPrice()['max']}}
            </td>
            <td>{{$product->stock->measurement->name}}</td>
            <td>
              {{$product->stock->discountActual()['value']}} %<br>
              @if ($product->stock->discountActual()['from'])
                {{$product->stock->discountActual()['from']}}<br>
                {{$product->stock->discountActual()['to']}}
              @endif
            </td>
            <td>{{$product->stock->productGroup->name}}</td>
            <td>{{$product->mark->name}}</td>
            <td>{{$product->line->name}}</td>
            <td>
              <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('products.destroy',$product->id)}}',
                        '{{$product->name}}'
                        )">
                    <i class="fa fa-trash"></i>
                </button>
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
