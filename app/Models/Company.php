<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'identification',
        'representant',
        'address',
        'email',

        // el tipo de documento para indicar si está usando el acceso al sri o es informal
        // también sirve para saber el tipo de documento que se va a entregar y si puede o o recibir retencion
        'type_identification', 
        
        // Montos economicos con los que va a trabajar la empresa
        'amount_chash',
        'amount_bank',
        
    ];

    public function employees()
    {
        return $this->belongsTo('App\Model\Employee');
    }

    public function transactions()
    {
        return $this->belongsTo('App\Model\Transaction');
    }

    public function movementsMoney()
    {
        return $this->hasMany('App\Models\MovementMoney');
    }

}
