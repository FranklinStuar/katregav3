<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    protected $fillable = [
        'cant',
        'unit_value',
        'discount',
        'porcent_disc',
        'sub_total', // subtotal es el resultado de cantidad x valor unitario restando descuento
        'tax', // el iva va en valores y no en indicar si tiene o no iva en boolean
        'total',
        'observation',
        'aditional_stock', // si se da algo màs como regalo, muy usado al momento de hacer inventario, de esa manera se sabe donde se va el producto
        'aditional_time', // en caso que el tiempo de entrega ya sea del producto o servicio sea adicional
        'stock_id',
        'transaction_id',
    ];
}
