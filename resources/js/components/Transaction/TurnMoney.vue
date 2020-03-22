<template>
    <div>
        <button class="btn btn-primary" data-toggle="modal" data-target=".modal-save" style='width:100%'>
            <i class="fas fa-save"></i> Guardar
        </button>
        <div class="modal fade modal-save" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background:#bdbdbd;" >
                    <div class="modal-body text-center">
                        <h3 class="text-center">Cobrar</h3>
                        <div class="form-group">
                            <span style="background:#bdbdbd;" class="form-control form-control-lg ">$ 10000</span>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg text-center" type="number" min="0" step="0.01" value="1000290">
                        </div>
                        <div class="form-group">
                            <label for="">Vuelto</label>
                            <span style="background:#bdbdbd;" class="form-control form-control-lg ">$ 10000</span>
                        </div>
                    </div>
                    <hr>
                    <button class="mb-1 col-sm-12 btn btn-primary" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                </div>
            </div>
        </div>

    </div>
</template>