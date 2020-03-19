<template>
    <div class="card">
        <div class="card-header">
            Detalle
            <div class="card-tools">
                <a href="#" class="btn btn-default btn-sm">Buscar</a>
                <a href="#" class="btn btn-default btn-sm">Crear</a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-hover">
                <thead>
         
                    <tr>
                        <th>#</th>
                        <th>Cod</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio Unit.</th>
                        <th>Descuento $</th>
                        <th>Desc. %</th>
                        <th>IVA</th>
                        <th>Total</th>
                        <th>T. Entrega</th>
                        <th>Cant. Regalo</th>
                        <th>Observación</th>
                    </tr>
                </thead>
                <tbody>
                <tr is="detail-item-list"></tr>
                </tbody>
            </table>
        </div>
        <detail-modal></detail-modal>
    </div>
</template>
<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>