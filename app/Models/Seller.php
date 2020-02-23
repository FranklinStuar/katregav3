<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $fillable = [
        'date',
        'code', // numracion continua que se sigue por empresa y no id en general
        'retention_tax', // total del dinero que se da a credito
        'retention_source', // total del dinero que se da a credito
        'num_retention_tax', // codigo de retencion al iva
        'num_retention_source', // codigo de retencion a la fuente
        'seller_completed', // indica si la compra ha sido realizada o se mantiene como proforma o como orden de pedido
        'guia_remision', // el numero de guia de remision que se entrega al momento de realizar la venta por transporte
        'status', // 
        'transaction_id',
        'client_id',
        'bill_id', // es la factura que se genera en la venta, en caso de ser nota de venta se genera una factura por varias ventas hasta llegar al monto establecido
    ];
}
