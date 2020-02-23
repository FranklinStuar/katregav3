<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'type_inventory',// tipos de inventarios, se realizará según se avance
        'without_stock',
        'sotck',// stock actual para no tener que hacer una actividad en la base de datos en cada consulta
        'measurement_id',
        'mark_id',
        'line_id',
        'stock_id',
    ];
    
    public function measurement()
    {
        return $this->belongsTo('App\Models\Measurement');
    }
    
    
    public function mark()
    {
        return $this->belongsTo('App\Models\Mark');
    }
    
    
    public function line()
    {
        return $this->belongsTo('App\Models\Line');
    }
    
    
    public function stock()
    {
        return $this->belongsTo('App\Models\Stock');
    }
    

}
