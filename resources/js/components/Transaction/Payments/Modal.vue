<template>
    <div>
        <!-- Extra large modal -->
        <button class="btn btn-secondary" data-toggle="modal" data-target=".modal-payments" style='width:100%'>
            <i class="fas fas fa-dollar-sign"></i> Métodos de pago
        </button>
        <div class="modal fade modal-payments" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h5>Cuentas Bancarias de {{companyName}} </h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>Cod</th>
                                                <th>Banco</th>
                                                <th>Cuenta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is='payment-item-account'
                                            ></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Total Efectivo</th>
                                            <td><h3><small>$ </small> 2000</h3></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="text-center">
                                    <button class="mb-1 btn btn-primary" data-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-share-square"></i> Continuar comprando
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h5>Cheques entregados 1</h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>Cod Banco</th>
                                                <th>Banco</th>
                                                <th># cheque</th>
                                                <th>Fecha Cheque</th>
                                                <th>Monto</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is='payment-item-check'
                                            ></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h5>
                                    Crédito 
                                    <button class="mb-1 btn btn-info btn-sm">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h5>
                                <div class="table-responsive table-retention-list">
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>Fecha de pago</th>
                                                <th>Monto</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                is="payment-item-credit"
                                            >
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    props:['companyName']
}
</script>