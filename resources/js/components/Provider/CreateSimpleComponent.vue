<template>
    <div>
        <!-- Extra large modal -->
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target=".providers-create-modal">Nuevo</button>

        <div class="modal fade providers-create-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo proveedor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" autocomplete="off">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="identification">Identificación</label>
                                    <input type="text" v-model="identification" name="identification" class="form-control" id="identification" placeholder="Identificación" value="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="type_identification" class="col-sm-6">Tipo de Identificación <span class="red-text">*</span></label>
                                    <select v-model="typeIdentification" name="type_identification" id="type_identification" class="form-control" required>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre del cliente</label>
                                    <input type="text" v-model="name" name="name" class="form-control" id="name" placeholder="Nombre del cliente" value="">
                                </div>
                                <div class="form-group">
                                    <label for="address">Dirección</label>
                                    <input type="text" v-model="address" name="address" class="form-control" id="address" placeholder="Dirección" value="">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono</label>
                                    <input type="text" v-model="phone" name="phone" class="form-control" id="phone" placeholder="Teléfono" value="">
                                </div>
                                <div class="form-group">
                                    <label for="movile">Celular</label>
                                    <input type="text" v-model="movile" name="movile" class="form-control" id="movile" placeholder="Celular" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="text" v-model="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" value="">
                                </div>
                                <div class="form-group">
                                    <label for="type_provider_id" class="col-sm-6">Tipo de proveedor <span class="red-text">*</span></label>
                                    <select v-model="typeProvider" name="type_provider_id" class="form-control" required>
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




    </div>
</template>

<script>
export default {
    data() {
        return {
            identification:'',
            typeIdentification:'',
            name:'',
            address:'',
            phone:'',
            movile:'',
            email:'',
            typeProvider:'',
        }
    },
}
</script>