<template>
    <div class="card">
        <div class="card-header">
            {{title}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6"><strong>Empresa</strong></div>
                <div class="col-sm-6">{{name}}</div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>{{type}}</strong></div>
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
            title:'Emisor',
            name:'Katrega',
            identification:'0106410277001',
            type:'RUC',
            address:'Cuenca',
            phone:'0991552605',
            email:'franklinepr@gmail.com',
            url:'katrega.com',
        }
    },
}
</script>