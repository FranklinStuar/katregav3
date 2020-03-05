<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone',
        'movile',
        'email',
        'type_price', // minorista, mayorista, proveedores, distribuidores, fieles
        'discount', // descuento en porcentaje utilizado al momento de hacer una venta, proforma u orden de compra, 
        'email_marketing', // si se hace email markting al cliente o no
        'whatsapp_marketing', // si se hace markting al cliente por whatsapp
        'deb', // deuda actual que tiene el cliente
        'credit', // Máximo que se le permite tener deuda al cliente
        'active', // Si está disponible su uso 
        'company_id',
        'type_client_id',
        'category_client_id',
        'zone_client_id',
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\TypeClient', 'type_client_id');
    }

    public function zone()
    {
        return $this->belongsTo('App\Models\ZoneClient', 'zone_client_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\CategoryClient', 'category_client_id');
    }
    
}
