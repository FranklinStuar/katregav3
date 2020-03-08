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
    <div class="container-fluid">
        <div class="row">
            <div class="card col-sm-6 col-md-4">
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
            
            <div class="card col-sm-6 col-md-4">
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
            
            <div class="card col-sm-6 col-md-4">
                <div class="card-header">
                    Proveedor
                    <div class="card-tools">
                      <a href="#" class="btn btn-default btn-sm">Buscar</a>
                      <a href="#" class="btn btn-default btn-sm">Crear</a>
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


        
        <div class="card">
            <div class="card-header">
                Detalle
                <div class="card-tools">
                  <a href="#" class="btn btn-default btn-sm">Buscar</a>
                  <a href="#" class="btn btn-default btn-sm">Crear</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cod</th>
                            <th>Cantidad</th>
                            <th>Medida</th>
                            <th>Precio Unitario</th>
                            <th>Descuento</th>
                            <th>Desc. %</th>
                            <th>IVA</th>
                            <th>Total</th>
                            <th>Observación</th>
                            <th>T. Entrega</th>
                            <th>Cant. Regalo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <span style="width:150px; display:block;"> Abc Electronic</span></td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                            <td> <span style="width:150px; display:block;"> Abc Electronic</span></td>
                            <td>
                                <select name="active" class="form-control" style="width: 135px;">
                                    <option value="1">20.00 (D) </option>
                                    <option value="0">50.00 (D) </option>
                                    <option value="0">30.00 (D) </option>
                                    <option value="0">44.00 (D) </option>
                                    <option value="0">34.00 (D) </option>
                                </select>
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="text" placeholder="Observacioes" name="sdisscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="0 días" min="0" name="disscount_fix" class="form-control">
                            </td>
                            <td>
                                <input style="width: 100px;" type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-8">
                
            <div class="card">
                <div class="card-body table-responsive p-0" style="max-height: 450px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Con IVA</th>
                            <th>Sin IVA</th>
                            <th>Totales</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subtotales</td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>Subtotales</td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>Subtotales</td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                                <td>
                                    <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
  
            </div>
        </div>

    </div>

@endsection