<!-- Extra large modal -->
<button class="mb-1 col-sm-12 btn btn-secondary" data-toggle="modal" data-target=".modal-payments">
    <i class="fas fas fa-dollar-sign"></i> Métodos de pago
</button>
<div class="modal fade modal-payments" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h5>Cuentas Bancarias de {{Auth::user()->company()->name}} </h5>
                        <div class="table-responsive table-retention-list">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Cod</th>
                                        <th>Banco</th>
                                        <th>Cuenta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CJEP260</td>
                                        <td>Cooperativa Jep</td>
                                        <td>091823810239</td>
                                    </tr>
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
                        <h5>Cheques entregados</h5>
                        <div class="table-responsive table-retention-list">
                            <table class="table table-hover">
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
                                    <tr>
                                        <td><span style="width:150px" class="form-control">CJEP260</span></td>
                                        <td><span style="width:150px" class="form-control">Cooperativa Jep</span></td>
                                        <td><input type="text" class="form-control" style="width:200px" value="12398721398" ></td>
                                        <td><input type="date" class="form-control" style="width:200px" value="01/01/2020" ></td>
                                        <td><input type="number" step="0.01" class="form-control" min="1" style="width:100px" value="1000"></td>
                                        <td>
                                            <button class="mb-1 btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Fecha de pago</th>
                                        <th>Monto</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="date" class="form-control" value="2020/01/01" ></td>
                                        <td><input type="number" class="form-control"  step="0.01" min="1" value="1000"></td>
                                        <td>
                                            <button class="mb-1 btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
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

<style>
    .table-retention-list{
        height: 220px;
        display: block;
        margin-bottom: 30px;
        border: 1px solid #e2e2e2;
        overflow: auto;
    }
    .table.table-hover td{
        cursor: pointer;
    }
</style>