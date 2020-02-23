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
}
