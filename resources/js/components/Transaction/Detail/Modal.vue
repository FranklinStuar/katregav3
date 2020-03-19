<template>
    <div class="modal fade details-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-all" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                    
                        <div class="col-sm-6 border-h">
                            <detail-search></detail-search>
                            <hr>
                            
                            <div class="table-container table-2 table-responsive">
                                <table class="table table-hover table-sm table-bordered table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cod</th>
                                            <th>Nom</th>
                                            <th>Cantidad</th>
                                            <th>Medida</th>
                                            <th>Precio Unit</th>
                                            <th>Desc $</th>
                                            <th>Desc %</th>
                                            <th>Iva</th>
                                            <th>Total</th>
                                            <th>D. ent.</th>
                                            <th>Cant. reg</th>
                                            <th>Observaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr is='detail-modal-tem'></tr>
                                    </tbody>
                                </table>
                            </div>
                            <detail-modal-price></detail-modal-price>
                        </div>
                       <detail-config-detail class="col-sm-3 pr-1"></detail-config-detail>
                        <detail-product-info 
                            class="col-sm-3"
                            v-if="typeStock=='P'"
                        ></detail-product-info>
                        <detail-service-info 
                            class="col-sm-3"
                            v-else
                        ></detail-service-info>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            typeStock:'S'
        }
    },
}
</script>