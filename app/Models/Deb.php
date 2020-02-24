<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deb extends Model
{
    protected $fillable = [
        'observations', // observaciones acerca de la deuda
        'date_pay', // fecha en la que se asigna pagar, si no paga completo la fecha cambia a otra fecha
        'date_payed', // fecha en la que cancela todo, 
        'amount', // monto que se registra en deuda
        'amount_payed', // monto que ha pagado, puede ser en su totalidad o parcial
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
