<template>
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
            ></retention-provider>
        </div>
        
        <div class="col-md-12">
            <hr> 
        </div>
        
        <div class="col-md-6 col-sm-12">
            <transaction-turn-money></transaction-turn-money>
        </div>
        <div class="col-md-6 col-sm-12">
            <button class="mb-1 col-sm-12 btn btn-danger" id="cancel">
                <i class="fas fa-times"></i> Cancelar
            </button>
        </div>
        <div class="col-md-6 col-sm-12">
            <transaction-upload-bill></transaction-upload-bill>
        </div>
    </div>
</template>