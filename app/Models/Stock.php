<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Stock extends Model
{
    
    protected $fillable = [
        'code',
        'name',
        'alternative_name',
        'disscount_fix',// descuento en porcentaje
        'tax',
        'seller',
        'purchase',
        'price_1',// Minorista
        'price_2',// Mayorista
        'price_3',// Distribuidor
        'price_4',// Proveedor
        'price_5',// Clientes fieles
        'active',
        'init_special',// fecha de inicio de descuento especial
        'finish_special',// fecha en que termina el descuento especial
        'disscount_special',// descuento especial en porcentaje
        'product_group_id',
        'measurement_id',
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
    
    public function minAndMaxPrice(){
        $min = $this->price_1;
        $max = $this->price_1;
        if($this->price_2 < $min && $this->price_2 > 0) $min = $this->price_2;
        if($this->price_3 < $min && $this->price_3 > 0) $min = $this->price_3;
        if($this->price_4 < $min && $this->price_4 > 0) $min = $this->price_4;
        if($this->price_5 < $min && $this->price_5 > 0) $min = $this->price_5;

        if($this->price_2 > $max && $this->price_2 > 0) $max = $this->price_2;
        if($this->price_3 > $max && $this->price_3 > 0) $max = $this->price_3;
        if($this->price_4 > $max && $this->price_4 > 0) $max = $this->price_4;
        if($this->price_5 > $max && $this->price_5 > 0) $max = $this->price_5;

        return ['min' => $min, 'max' => $max];
    }

    public function discountActual(){
        if($this->init_special && $this->finish_special){
            $initDate = new Carbon($this->init_special);
            $finishDate = new Carbon($this->finish_special);
            $finishDate = $finishDate->addDay();
            $today = Carbon::now();
            if($today >= $this->init_special || $today <= $finishDate)
                return [
                    'value' => $this->disscount_special,
                    'from' => 'Desde '.$initDate->toFormattedDateString(),
                    'to' => 'Hasta '.$finishDate->toFormattedDateString(),
                ];
        }
        return [
            'value' => $this->disscount_fix,
            'from' => null,
            'to' => null,
        ];

    }
    
    public function measurement()
    {
        return $this->belongsTo('App\Models\Measurement');
    }
    
}
