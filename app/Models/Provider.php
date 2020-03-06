<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    
    protected $fillable = [
        'id',
        'name',
        'identification',
        'address',
        'phone',
        'movile',
        'deb', // deuda actual que se tiene con el proveedor
        'active', 
        'type_identification',  // tipo de indentificaciòn para indicarnos que es lo que nos entrega le proveedor // ruc, rise, none
        'company_id',
        'type_provider_id',
        'retention_font',
        'retention_tax',
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function type()
    {
        return $this->belongsTo('App\Models\TypeProvider', 'type_provider_id');
    }
    
    public function retentionFont()
    {
        return $this->belongsTo('App\Models\Retention', 'retention_font');
    }

    public function retentionTax()
    {
        return $this->belongsTo('App\Models\Retention', 'retention_tax');
    }

}
