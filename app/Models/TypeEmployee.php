<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEmployee extends Model
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
    
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'type_employee');
    }
}
