<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebPurchase extends Model
{
    protected $fillable = [
        'purchase_id',
        'deb_id',
    ];
    

    public function deb()
    {
        return $this->belongsTo('App\Models\Deb');
    }
    
    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchase');
    }
}
