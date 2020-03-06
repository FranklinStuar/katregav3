<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retention extends Model
{
    protected $fillable = [
        'code',
        'description',
        'porcent',
        'destine', // retención a la fuente o al iva
        'type', // mercaderia o servicio
        'company_id',
    ];

    public function providers()
    {
        return $this->hasMany('App\Models\Provider');
    }

    public function sellers()
    {
        return $this->hasManyThrough('App\Models\Seller', 'App\Models\Transaction','company_id','transaction_id');
    }

    public function purchase()
    {
        return $this->hasManyThrough('App\Models\Purchase', 'App\Models\Transaction','company_id','transaction_id');
    }
}
