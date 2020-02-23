<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
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
        'stock_id',
        'bill_id',
    ];

    public function bill()
    {
        return $this->belongsTo('App\Models\Bill');
    }

    public function stock()
    {
        return $this->belongsTo('App\Models\Stock');
    }
}
