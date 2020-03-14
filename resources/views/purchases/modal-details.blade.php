<!-- Extra large modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".details-modal">Detalles</button>
<style>
    .modal-all{
        min-width: 100%;
        margin: 0;
        overflow: scroll,
    }
    .modal-all .modal-content{
        min-height: 100vh;
    }
    div.table-container{
        height: 220px;
        display: block;
        margin-bottom: 30px;
        border: 1px solid #e2e2e2;
        overflow: auto;
    }
    .table-container.table-1{
    }
    .total-details{
        text-align: center;
        border: 1px solid #e2e2e2;
    }
    .border-h{
        border-left: 1px solid #e2e2e2;
        border-right: 1px solid #e2e2e2;
    }
    .pr-1 > .form-group{
        padding-right: 10px;
    }
    .table.table-hover td{
        cursor: pointer;
    }
</style>
<div class="modal fade details-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-all" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3 pr-1">
                        <h5 class="text-center">
                            Detalle
                        </h5>
                        <hr>
                        
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">#</label>
                            <span class=" col-sm-6">
                                1
                                <button class="ml-1 btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                    Quitar
                                </button>
                            </span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Venta como</label>
                            <select class="form-control form-control-sm col-sm-6">
                                <option value="">Minorista</option>
                                <option value="">Mayorista</option>
                                <option value="">Proveedor</option>
                                <option value="">Distribuidor</option>
                                <option value="">Cliente Fiel</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Código</label>
                            <span class="form-control form-control-sm col-sm-6">Código</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Nombre</label>
                            <span class="form-control form-control-sm col-sm-6">Nombre</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Cantidad</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Medida</label>
                            <span class="form-control form-control-sm col-sm-6">Medida</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Precio Unitario</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Descuento $</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Descuento %</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">IVA</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Total</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Días de entrega</label>
                            <input type="number" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Cantidad de regalo</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-6">Comentario</label>
                            <input type="text"  name="disscount_special" class="form-control form-control-sm col-sm-6" id="disscount_special" >
                        </div>
                        <hr>
                        <button class="mb-1 btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-trash"></i> Quitar de la lista
                        </button>
                    </div>
                    <div class="col-sm-6 border-h">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-append">
                                <select class="from-control">
                                    <option value="">Minorista</option>
                                    <option value="">Mayorista</option>
                                    <option value="">Proveedor</option>
                                    <option value="">Distribuidor</option>
                                    <option value="">Cliente Fiel</option>
                                </select>
                            </div>
                            <input type="search" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="search-provider">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="search-provider">Buscar</button>
                            </div>
                        </div>
                        <div class="table-container table-1 table-responsive">
                            <table class="table table-hover table-sm table-bordered table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Cod.</th>
                                        <th>Cod. Alt</th>
                                        <th>Nombre</th>
                                        <th>Stock</th>
                                        <th>Precio</th>
                                        <th>Descuento</th>
                                        <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>Stock (Unid Med.) </td>
                                        <td>Precio</td>
                                        <td>Descuento</td>
                                        <td>Producto</td>
                                    </tr>
                                    <tr>
                                        <td>Cod.</td>
                                        <td>Cod. Alt</td>
                                        <td>Nombre</td>
                                        <td>20 (Unidades) </td>
                                        <td>$30.60</td>
                                        <td>10% (Especial)</td>
                                        <td>Servicio</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Cod</td>
                                        <td>Nom</td>
                                        <td>0,00</td>
                                        <td>Med</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>0,00</td>
                                        <td>Color rojo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="total-details">$ 10000.00 </h3>
                            </div>
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="mb-1 btn btn-primary" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-share-square"></i> Continuar comprando
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h5>Producto</h5>
                        <hr>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Código</label>
                            <span class=" col-sm-7">Código</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Código Alterno</label>
                            <span class=" col-sm-7">Código</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Nombre</label>
                            <span class=" col-sm-7">Nombre</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Stock</label>
                            <span class=" col-sm-7">10 unidades de medida</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">IVA</label>
                            <span class=" col-sm-7">Tiene IVA</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Ganancia Minorista</label>
                            <span class=" col-sm-4">$0,30</span>
                            <span class=" col-sm-3">(20%)</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Ganancia Mayorista</label>
                            <span class=" col-sm-4">$0,30</span>
                            <span class=" col-sm-3">(20%)</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Ganancia Proveedor</label>
                            <span class=" col-sm-4">$0,30</span>
                            <span class=" col-sm-3">(20%)</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Ganancia Distribuidor</label>
                            <span class=" col-sm-4">$0,30</span>
                            <span class=" col-sm-3">(20%)</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Ganancia Cliente Fiel</label>
                            <span class=" col-sm-4">$0,30</span>
                            <span class=" col-sm-3">(20%)</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Descuento</label>
                            <span class=" col-sm-7">10% (Descuendo especial)</span>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Grupo</label>
                            <span class=" col-sm-7">Grupo</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Marca</label>
                            <span class=" col-sm-7">Marca</span>
                        </div>
                        <div class="form-group row">
                            <label for="disscount_special" class="col-sm-5">Linea</label>
                            <span class=" col-sm-7">Linea</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



