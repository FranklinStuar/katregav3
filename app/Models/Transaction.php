<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'date',
        'cod',
        //Forma en la que se paga
        'type_price', // 1 a 5 de los precios elegidos para los productos
        'total_credit_card', // total del dinero que se paga con tarjeta de crédito
        'total_debit_card', // total del dinero que se paga con tarjeta de débito
        'total_cash', // total del dinero que se da en efectivo
        'total_credit', // total del dinero que se da a credito
        'time_credit', // tiempo que se le da crédito o se recive crédito con la operacion
        // montos internos de la facturación
        'total_tax',
        'total_not_tax',
        'tax',
        'discount_tax',
        'discount_not_tax',
        'services', // son otro servicios extras fuera de la venta que no se facturan
        'transport',
        'porcent_disc_tax',
        'porcent_disc_not_iva',
        'observation',
        'status', // 
        'user_id', // vendedor o comprador cuando corresponda
        'company_id',
    ];
}
