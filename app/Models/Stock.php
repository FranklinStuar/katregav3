<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    
    protected $fillable = [
            'code',
            'name',
            'alternate_name',
            'disscount_fix',// descuento en porcentaje
            'tax',
            'seller',
            'purchase',
            'price_1',// precios del 1 al 5
            'price_2',// precios del 1 al 5
            'price_3',// precios del 1 al 5
            'price_4',// precios del 1 al 5
            'price_5',// precios del 1 al 5
            'active',
            'init_special',// fecha de inicio de descuento especial
            'finish_special',// fecha en que termina el descuento especial
            'disscount_special',// descuento especial en porcentaje
            'product_group_id',
            'company_id',
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function productGroup()
    {
        return $this->belongsTo('App\Models\ProductGroup');
    }
    
}
