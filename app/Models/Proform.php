<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proform extends Model
{
    //
    protected $fillable = [
        'date',
        'code',
        'transaction_id',
        'seller_id',
        'client_id',
    ];
    
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    
    public function seller()
    {
        return $this->belongsTo('App\Models\Seller');
    }
    
    
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction');
    }
    
}
