<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable=[
        'date', // fecha que se realiza el mantenimiento y con el horario para revisar en el mejor momento para hacerle publicidad
        'observation',
        'type_maintenance', // 1:correctivo, 2:preventivo, 3:predictivo, 4:programado, 5:por periodo de tiempo // se agregarán dependiendo se necesite
        'next_maintenance', // fecha de la proxima revision en caso de existir
        'seller_id', // en caso que el mantenimiento esté vinvulado a alguna venta en concreto, nulo porque puede dar mantenimiento gratuito al ser panas o algo parecido
        'client_id', // a quien se realiza el mantenimiento
        'company_id',
    ];

    public function seller()
    {
        return $this->belongsTo('App\Models\Seller');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function details()
    {
        return $this->hasMany('App\Models\MaintenanceDetail');
    }
}
