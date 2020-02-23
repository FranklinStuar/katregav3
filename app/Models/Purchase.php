<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $fillable = [
        'date',
        'code', // el codigo que se genera automaticamente para la empresa y listar por id
        'bill', // el numero de factura que nos entregan
        'type_document', // tipo de documento que nos entrega el proveedor, puede ser factura o nota de venta o ninguno
        'provider_id',
        'transaction_id',
    ];
    
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction');
    }
    
}
