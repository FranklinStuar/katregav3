<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retention extends Model
{
    protected $fillable = [
        'code',
        'code_anex',
        'description',
        'porcent',
        'destine', // retención a la fuente o al iva
        'type', // mercaderia o servicio
        'company_id',
    ];

}
