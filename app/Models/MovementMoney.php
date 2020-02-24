<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovementMoney extends Model
{
    protected $fillable = [
        'cash', // cuanto se agrega o quita en efectivo
        'bank', // cuanto se agrega o quita en bancos
        'total_cash', // el total actual en efectivo
        'total_bank', //  Total actual en bancos
        'comment', // el motivo del cambio
        // el tipo de movimiento realizado, se agregará por numeros dependiendo de lo que vaya saliendo 
        // de momento se tiene pensado en compras, ventas, cambio de banco a efectivo y viceversa
        'type', 
        'responsable', // se agrega solo el nombre de la persona indicada
        'company_id',
    ];
}
