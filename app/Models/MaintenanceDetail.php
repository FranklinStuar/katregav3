<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceDetail extends Model
{
    protected $fillable = [
        'activity', // la actividad que realiza en el mantenimiento
        'comment', // comentarios, observaciones o detalles extra acerca esa actividad realizada
        'repsonsable', // quien realiza esa actividad
        'maintenance_id',
    ];

    
    public function maintenance()
    {
        return $this->belongsTo('App\Models\Maintenance');
    }

}
