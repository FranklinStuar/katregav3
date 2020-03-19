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

            <div class=" col-sm-6 col-md-4">
                <company-component></company-component>
            </div>
            <div class=" col-sm-6 col-md-4">
                <purchase-bill-component></purchase-bill-component>
            </div>
            <div class=" col-sm-6 col-md-4">
                <provider-purchase-component></provider-purchase-component>
            </div>
        </div>


        
        <detail-card></detail-card>



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
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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