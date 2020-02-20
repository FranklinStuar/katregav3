<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone',
        'type_price',
        'disscount',
        'deb',
        'credit',
        'company_id',
    ];
}
