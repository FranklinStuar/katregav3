<template>
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
                <purchase-btn></purchase-btn>
            </div>
        </div>
    </div>
</template>