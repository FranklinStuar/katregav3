<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeClient extends Model
{
    //
    protected $fillable = [
        'name',
        'company_id'
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function clients()
    {
        return $this->hasMany('App\Models\Client', 'type_client');
    }
}
