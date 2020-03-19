<template>
    <div class="card">
        <div class="card-header">
            Proveedor
            <div class="card-tools">
            <provider-search-component></provider-search-component>
            <provider-create-simple-component></provider-create-simple-component>
            </div>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-sm-6"><strong>Nombre</strong></div>
                <div class="col-sm-6">{{name}}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>{{typeIdentification}}</strong></div>
                <div class="col-sm-6">{{identification}}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>Dirección</strong></div>
                <div class="col-sm-6">{{address}}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>Teléfono</strong></div>
                <div class="col-sm-6">{{phone}}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>Correo Elctrónico</strong></div>
                <div class="col-sm-6">{{email}}</div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name:'Katrega',
            typeIdentification:'RISE',
            identification:'01920382398',
            address:'Cuenca',
            phone:'07123987',
            email:'provider@mail.com',
        }
    },
}
</script>