<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable=[
        'date', // fecha que se realiza el mantenimiento y con el horario para revisar en el mejor momento para hacerle publicidad
        'observation',
        'type', // c=correctivo, pv=preventivo, pd=predictivo
        'next_maintenance', // fecha de la proxima revision en caso de existir
        'seller_id', // en caso que el mantenimiento esté vinvulado a alguna venta en concreto, nulo porque puede dar mantenimiento gratuito al ser panas o algo parecido
        'company_id',
    ];
}
