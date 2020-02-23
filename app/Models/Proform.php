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
        'client_id',
    ];
    
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    
    
    public function transaction()
    {
        return $this->belongsTo('App\Models\Transaction');
    }
    
}
