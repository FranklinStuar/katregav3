<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSeller extends Model
{
    //
    protected $fillable = [
        'code',
        'date',
        'fecha_entrega', // fecha en la que se entrega la orden
        'code',
        'status', // i=Ingresado, a=aceptado, s=vendido, d=rechazado
        'seller_id', // cuando se termine se efectua en venta
        'transaction_id',
        'client_id',
    ];
}
