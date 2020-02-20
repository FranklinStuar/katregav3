<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proform extends Model
{
    //
    protected $fillable = [
        'code',
        'client_id',
        'transaction_id',
    ];
}
