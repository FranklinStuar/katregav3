<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
         //Forma en la que se paga
         'type_price', // 1 a 5 de los precios elegidos para los productos
         'total_cash', // total del dinero que se da en efectivo
         'total_credit', // total del dinero que se da a credito
         'total_checkbook', // total que se ha pagado o cobrado en cheque
         // montos internos de la facturación
         'total', // Total final de la transaccion
         'total_tax',
         'total_not_tax',
         'tax',
         'discount_tax',
         'discount_not_tax',
         'porcent_disc_tax',
         'porcent_disc_not_iva',
         'interes', // en caso que tenga que pagar interés por algo aparte de la venta
         'services', // son otro servicios extras fuera de la venta que no se facturan
         'transport',
         'observation',
         'user_id', // vendedor o comprador cuando corresponda
         'company_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function retentions()
    {
        return $this->belongsToMany('App\Models\Retention', 'provider_retention');
    }
    
}
