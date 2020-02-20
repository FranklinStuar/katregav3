<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    
    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone',
        'type_price',// minorista, mayorista, proveedores, distribuidores, fieles
        'deb',// deuda actual que se tiene con el proveedor
        'company_id',
    ];
}
