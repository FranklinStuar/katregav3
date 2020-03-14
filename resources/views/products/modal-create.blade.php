<!-- Extra large modal -->
<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target=".product-create-modal">Nuevo</button>

<div class="modal fade product-create-modal text-left" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="#" method="POST" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="identification">Codigo</label>
                            <input type="text" name="identification" class="form-control" id="identification" placeholder="Codigo" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="identification">Nombre</label>
                            <input type="text" name="identification" class="form-control" id="identification" placeholder="Nombre" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="type_identification" class="col-sm-6">IVA <span class="red-text">*</span></label>
                            <select name="type_identification" class="form-control" class="col-sm-6" required>
                                <option value="1">Tiene IVA</option>
                                <option value="0">NO Tiene IVA</option>
                            </select>
                        </div>
                        
                        <hr>

                        <h3>Precios</h3>
                        <div class="form-group">
                            <label for="price_1" class="col-sm-6">Minorista <span class="red-text">*</span></label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_1" class="form-control col-sm-6" id="price_1">
                        </div>
                        <div class="form-group">
                            <label for="price_2" class="col-sm-6">Mayorista</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_2" class="form-control col-sm-6" id="price_2">
                        </div>
                        <div class="form-group">
                            <label for="price_3" class="col-sm-6">Distribuidor</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_3" class="form-control col-sm-6" id="price_3">
                        </div>
                        <div class="form-group">
                            <label for="price_4" class="col-sm-6">Proveedor</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_4" class="form-control col-sm-6" id="price_4">
                        </div>
                        <div class="form-group">
                            <label for="price_5" class="col-sm-6">Clientes fieles</label>
                            <input type="number" placeholder="1.0" step="0.01" min="0" name="price_5" class="form-control col-sm-6" id="price_5">
                        </div>
                        
                        <hr>

                        <div class="form-group">
                            <label for="measurement_id" class="col-sm-6">Unidad de medida <span class="red-text">*</span></label>
                            <select name="measurement_id" class="form-control" class="col-sm-6" required>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_group_id" class="col-sm-6">Grupo <span class="red-text">*</span></label>
                            <select name="product_group_id" class="form-control" class="col-sm-6" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mark_id" class="col-sm-6">Marca <span class="red-text">*</span></label>
                            <select name="mark_id" class="form-control" class="col-sm-6" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="line_id" class="col-sm-6">Linea de producto <span class="red-text">*</span></label>
                            <select name="line_id" class="form-control" class="col-sm-6" required>
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



