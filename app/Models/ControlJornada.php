<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlJornada extends Model
{
    protected $fillable = [
        'into', // hora de ingreso
        'exit', // hora de salida
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
