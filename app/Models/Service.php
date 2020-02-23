<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'stock_id'
    ];
    
    public function stock()
    {
        return $this->belongsTo('App\Models\Stock');
    }
    
}
