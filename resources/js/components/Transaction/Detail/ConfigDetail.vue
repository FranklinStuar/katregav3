<template>
     <div>
        <h5 class="text-center">
            Detalle
        </h5>
        <hr>
        
        <div class="form-group row">
            <label for="disscount_special" class="col-sm-6">#</label>
            <span class=" col-sm-6">
                3
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
</template>

<script>
export default {
    
}
</script>