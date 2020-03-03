@extends('layouts.app')

@section('title-top')
    Servicios
@endsection

@section('title-body')
    Servicios
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('services.create')}}" class="btn btn-default btn-sm">Nuevo Servicio</a>
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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr>
            <td>
              @if ($service->stock->active)
                <i class="fas fa-circle green-text"></i>
              @else
                <i class="fas fa-circle red-text"></i>
              @endif
            </td>
            <td>{{$service->stock->code}}</td>
            <td>{{$service->stock->name}}</td>
            <td>{{$service->stock->alternative_name}}</td>
            <td>
              @if ($service->stock->tax)
                <i class="fas fa-check green-text"></i>
              @else
                <i class="fas fa-times red-text"></i>
              @endif
            </td>
            <td>
              @if($service->stock->seller) Venta <br> @endif
              @if($service->stock->purchase) Compra @endif
            </td>
            <td>
              Mínimo: $ {{$service->stock->minAndMaxPrice()['min']}} <br>
              Máximo: $ {{$service->stock->minAndMaxPrice()['max']}}
            </td>
            <td>{{$service->stock->measurement->name}}</td>
            <td>
              {{$service->stock->discountActual()['value']}} %<br>
              @if ($service->stock->discountActual()['from'])
                {{$service->stock->discountActual()['from']}}<br>
                {{$service->stock->discountActual()['to']}}
              @endif
            </td>
            <td>{{$service->stock->productGroup->name}}</td>
            <td>
              <a href="{{route('services.edit',$service->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('services.destroy',$service->id)}}',
                        '{{$service->name}}'
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
