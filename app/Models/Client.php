<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone',
        'type_price', // minorista, mayorista, proveedores, distribuidores, fieles
        'disscount', // descuento en porcentaje
        'email_marketing', // si se hace email markting al cliente o no
        'whatsapp_marketing', // si se hace markting al cliente por whatsapp
        'deb', // deuda actual que tiene el cliente
        'credit', // Máximo que se le permite tener deuda al cliente
        'company_id',
    ];
}
