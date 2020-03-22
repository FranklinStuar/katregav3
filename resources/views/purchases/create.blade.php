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
                    <monto-editable class="table-responsive"></monto-editable>
                </div>
                <div class="card">
                    <div class="card-body">
                        <transaction-observations></transaction-observations>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                
                <div class="card total-final">
                    {{-- <div class="card-head">Total a pagar</div> --}}
                    <monto-total-final class="card-body"></monto-total-final>
                </div>
                <div class="card">
                    <monto-adicional class="card-body"></monto-adicional>
                </div>
                <div class="card">
                    <div class="card-body">
                        <transaction-guia-remision></transaction-guia-remision>
                    </div>
                </div>
            </div>


            <div class="col-md-2 col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        <payment-modal 
                            class="mb-1 col-sm-12 p-0" 
                            :company-name='"{{Auth::user()->company()->name}}"'
                        ></payment-modal>
                    </div>
                    <div class="col-md-12">
                        <retention-provider 
                            class="mb-1 col-sm-12 p-0" 
                            :company-name='"{{Auth::user()->company()->name}}"'
                        ></retention-provider>
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