@extends('layouts.app')

@section('title-top')
    Retenciones
@endsection

@section('title-body')
    Retenciones
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-tools">
      <a href="{{route('retentions.create')}}" class="btn btn-default btn-sm">Nueva retención</a>
    </div>
  </div>
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <table class="table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>Código</th>
          <th>Código Anexo</th>
          <th>Descripción</th>
          <th>Porcentaje</th>
          <th>Destino</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($retentions as $retention)
          <tr>
            <td>{{$retention->code}}</td>
            <td>{{$retention->code_anex}}</td>
            <td>{{$retention->description}}</td>
            <td>{{$retention->porcent}}</td>
            <td>@if($retention->destine==0) Fuente @elseif($retention->destine==1) IVA @endif</td>
            <td>
              <a href="{{route('retentions.edit',$retention->id)}}" class="btn btn-sm btn-info">Editar</a>
                <button 
                    class="delete btn btn-sm btn-outline-danger" 
                    onclick="deleteItem(
                        '{{route('retentions.destroy',$retention->id)}}',
                        '{{$retention->name}}'
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
