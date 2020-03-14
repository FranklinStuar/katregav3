@extends('layouts.app')

@section('title-top')
    Nueva Compra
@endsection

@section('title-body')
    Nueva Compra
@endsection

@section('sidebar-functions')
    sidebar-collapse
@endsection

@section('content')
<style>
    
    .table.table-hover td{
        cursor: pointer;
    }
    .title-table{
        text-align: center
    }
</style>
    <div class="container-fluid">
        <div class="row">

            <div class=" col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        Emisor
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6"><strong>Empresa</strong></div>
                            <div class="col-sm-6">{{Auth::user()->company()->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>@if(Auth::user()->company()->type_identification == 'ruc') RUC @elseif(Auth::user()->company()->type_identification == 'rise') RISE  @else Identificación @endif</strong></div>
                            <div class="col-sm-6">{{Auth::user()->company()->identification}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Dirección</strong></div>
                            <div class="col-sm-6">{{Auth::user()->company()->address}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Teléfono</strong></div>
                            <div class="col-sm-6">{{Auth::user()->company()->identification}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Correo Elctrónico</strong></div>
                            <div class="col-sm-6">{{Auth::user()->company()->identification}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        Comprobante recibido
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6"><strong>Fecha de emisión</strong></div>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" value="{{$purchase->date->toDateString()}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Tipo de Comprobante</strong></div>
                            <div class="col-sm-6">
                                <select name="type_document" class="form-control" class="col-sm-6" required>
                                    <option value="none" @if($purchase->type_document == 'none') selected @endif>Sin documento</option>
                                    <option value="bill" @if($purchase->type_document == 'bill') selected @endif>Factura</option>
                                    <option value="note" @if($purchase->type_document == 'note') selected @endif>Nota de venta</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong># de Comprobante</strong></div>
                            <div class="col-sm-6">
                                <input type="text" maxlength="17" class="form-control" value="{{$purchase->bill}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        Proveedor
                        <div class="card-tools">
                        @include('providers.modal-list')
                        @include('providers.modal-create')
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-sm-6"><strong>Nombre</strong></div>
                            <div class="col-sm-6">{{$purchase->provider->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>@if($purchase->provider->type_identification == 'ruc') RUC @elseif($purchase->provider->type_identification == 'rise') RISE  @else Identificación @endif</strong></div>
                            <div class="col-sm-6">{{$purchase->provider->identification}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Dirección</strong></div>
                            <div class="col-sm-6">{{$purchase->provider->address}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Teléfono</strong></div>
                            <div class="col-sm-6">{{$purchase->provider->identification}}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><strong>Correo Elctrónico</strong></div>
                            <div class="col-sm-6">{{$purchase->provider->identification}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        
        <div class="card">
            <div class="card-header">
                <h4 class="title-table">Detalles</h4>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-sm table-bordered table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Descuento</th>
                            <th>Desc. %</th>
                            <th>IVA</th>
                            <th>Total</th>
                            <th>T. Entrega</th>
                            <th>Cant. Regalo</th>
                            <th>Observación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                        <tr data-toggle="modal" data-target=".details-modal">
                            <td>1</td>
                            <td>AbcElec</td>
                            <td>Abc Electronic</td>
                            <td>Cantidad (Medida) </td>
                            <td>$50 (D) </td>
                            <td>$50</td>
                            <td>50 %</td>
                            <td>$50</td>
                            <td>$50</td>
                            <td>1 d[ia</td>
                            <td>Cantidad (Medida) </td>
                            <td>Observaciones </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer title-table">
                @include('purchases.modal-details')
                @include('products.modal-create')
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body table-responsive p-0" style="max-height: 450px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Sin IVA</th>
                                <th>Con IVA</th>
                                <th>Totales</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <span class="form-control text-muted">1000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Descuento $</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <span class="form-control text-muted">1000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Descuento %</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <span class="form-control text-muted">1000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IVA</td>
                                    <td>
                                        <span class="form-control text-muted">0</span>
                                    </td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                    </td>
                                    <td>
                                        <span class="form-control text-muted">1000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TOTAL</td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        @include('purchases.modal-ajust-amount')
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Observaciones</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                
                <style>
                    .total-final{
                        text-align: center
                    }
                </style>
                <div class="card total-final">
                    {{-- <div class="card-head">Total a pagar</div> --}}
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total a pagar</h6>
                        <h2>$ 184000.00</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-center">Montos adicionales no facturados</h6>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Servicios extra</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transporte</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Intereses</td>
                                    <td>
                                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$ 1000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Guía de remisión</label>
                            <input type="text" maxlength="159" class="form-control" value="12397312487698">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-2 col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        @include('purchases.modal-payment')
                    </div>
                    <div class="col-md-12">
                        @include('purchases.retentions')
                    </div>
                    
                    <div class="col-md-12">
                        <hr> 
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        @include('purchases.modal-save')
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <button class="mb-1 col-sm-12 btn btn-danger" id="cancel">
                            <i class="fas fa-times"></i> Cancelar
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        @include('purchases.modal-upload-bill')
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <button class="mb-1 col-sm-12 btn btn-info">
                            <i class="fas fa-print"></i> Imprimir
                        </button>
                    </div>
                </div>
            </div>



        </div>

    </div>

@endsection

@section('scripts-bottom')
    <script>
        $(()=>{
            $('#cancel').click(()=>{
                console.log('Cancelar')
                swal({
                    title: 'Cancelar Compra',
                    text: '',
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Continuar',
                    cancelButtonText: 'Seguir comprando',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-default',
                    // buttonsStyling: false
                }).then(function () {
                    swal(
                        'Cancelado',
                        '',
                        "success",
                    )
                })
            })
        })
    </script>
@endsection