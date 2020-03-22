<template>
    <div>
        <button class="btn btn-info" data-toggle="modal" data-target=".modal-upload-bill">
            <i class="fas fa-file-invoice"></i> <br> Subir Factura
        </button>
        <div class="modal fade modal-upload-bill" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3 class="text-center">Subir Factura electrónica</h3>
                        <hr>
                        <div class="form-group text-center">
                            <label for="upload-bill" style="cursor:pointer;" class="btn btn-primary ">
                                Buscar Archivo XML
                            </label>
                            <input style="display:none;" type="file" name="upload-bill" id="upload-bill">
                        </div>
                        <hr>
                        <button class="mb-1 col-sm-12 btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-upload"></i> Cargar Archivo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>