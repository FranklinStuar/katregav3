<template>
    <div class="card">
        <div class="card-header">
            Comprobante recibido
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6"><strong>Fecha de emisión</strong></div>
                <div class="col-sm-6">
                    <input type="date" class="form-control" v-model="date" >
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong>Tipo de Comprobante</strong></div>
                <div class="col-sm-6">
                    <select class="form-control" v-model="typeDocument" required>
                        <option value="none">Sin documento</option>
                        <option value="bill">Factura</option>
                        <option value="note">Nota de venta</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><strong># de Comprobante</strong></div>
                <div class="col-sm-6">
                    <input type="text" maxlength="17" class="form-control" v-model="numDocument">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            typeDocument:'bill',
            date:'2020-10-01',
            numDocument:'001-001-00010101010'
        }
    },
}
</script>