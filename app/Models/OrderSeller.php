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
        'status', // i=Ingresado, a=aceptado, s=vendido, d=rechazado
        'advancement', // Adelanto con lo que se va a trabajar
        'seller_id', // cuando se termine se efectua en venta
        'transaction_id',
        'client_id',
    ];
    
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction');
    }
    
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    
    public function seller()
    {
        return $this->belongsTo('App\Models\Seller');
    }
    
}
