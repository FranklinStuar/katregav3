<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSeller extends Model
{
    //
    protected $fillable = [
        'code',
        'status', // Ingresado, aceptado, vendido, rechazado
        'client_id',
        'seller_id', // si fue aprovado se puede transformar en venta
        'transaction_id',
    ];
}
