<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebSeller extends Model
{
    protected $fillable = [
        'seller_id',
        'deb_id',
    ];

    public function deb()
    {
        return $this->belongsTo('App\Models\Deb');
    }
    
    public function seller()
    {
        return $this->belongsTo('App\Models\Seller');
    }
}
