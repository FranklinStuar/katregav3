<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $fillable = [
        'code',
        'provider_id',
        'transaction_id',
    ];
}
