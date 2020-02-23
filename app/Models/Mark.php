<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
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
    
}
