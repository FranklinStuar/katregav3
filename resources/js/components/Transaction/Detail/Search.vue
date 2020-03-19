<template>
    <div>
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
                    <tr is='detail-search-tem'>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>