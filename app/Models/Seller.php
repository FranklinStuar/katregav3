<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $fillable = [
        'code',
        'guia_remision',
        'client_id',
        'transaction_id',
        'bill_id', // es la factura que se genera en la venta, en caso de ser nota de venta se genera una factura por varias ventas hasta llegar al monto establecido
    ];
}
