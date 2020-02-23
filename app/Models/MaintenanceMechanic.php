<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceMechanic extends Model
{
    protected $fillable = [
        'km_init', // kilometraje con el que ingresa 
        'km_finish', // kilometraje con el que sale
        'next_change', // cuando es el siguiente cambio de aceite
        'maintenance_id',
    ];
}
