<template>
    <div>
        <h6 class="text-center">Montos adicionales no facturados</h6>
        <table class="table">
            <tbody>
                <tr>
                    <td>Servicios extra</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Transporte</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Intereses</td>
                    <td>
                        <input type="number" placeholder="1.0" step="0.01" min="1" name="disscount_fix" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$ 1000.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    
}
</script>