<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProvider extends Model
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
    
    public function providers()
    {
        return $this->hasMany('App\Models\Provider', 'type_provider');
    }
}
