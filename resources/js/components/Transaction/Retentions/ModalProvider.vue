<template>
    <div>
        <!-- Extra large modal -->
        <button class="btn btn-info" data-toggle="modal" data-target=".modal-retentions" style='width:100%'>
            <i class="fas fa-university"></i> Retenciones
        </button>
        <div class="modal fade modal-retentions" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>Retenciones Proveedor</h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>Retencion %</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is="retention-provider-item"
                                            >
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h5>Lista de retenciones</h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>Retencion %</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is="retention-item-retencion-list"
                                            >
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5>Retenido</h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Retencion %</th>
                                                <th>$ Retenido</th>
                                                <th>Tipo</th>
                                                <th>Observacion</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is="retention-item-retenido"
                                            >
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <retention-total></retention-total>
                                <hr>
                                <div class="text-center">
                                    <button class="mb-1 btn btn-primary" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-share-square"></i> Continuar comprando
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>