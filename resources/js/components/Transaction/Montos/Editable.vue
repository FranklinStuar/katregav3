<template>
   <div class="table-responsive">
        <table class="table table-head-fixed text-nowrap">
            <thead>
            <tr>
                <th></th>
                <th>Sin IVA</th>
                <th>Con IVA</th>
                <th>Totales</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <span class="form-control text-muted">1000</span>
                    </td>
                </tr>
                <tr>
                    <td>Descuento $</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <span class="form-control text-muted">1000</span>
                    </td>
                </tr>
                <tr>
                    <td>Descuento %</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <span class="form-control text-muted">1000</span>
                    </td>
                </tr>
                <tr>
                    <td>IVA</td>
                    <td>
                        <span class="form-control text-muted">0</span>
                    </td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="0" name="deb" class="form-control" id >
                    </td>
                    <td>
                        <span class="form-control text-muted">1000</span>
                    </td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td>
                        1000
                    </td>
                    <td>
                        1000
                    </td>
                    <td>
                        <monto-ajuste></monto-ajuste>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    
}
</script>