<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'identification',
        'name',
        'email', // correo es de la empresa, no se permiten correos personales
        'password', // contraseña interna para uso dentro de la empresa
        'birth', // fecha de nacimiento
        'address',
        'phone',
        'charge',
        'salary',
        'journal', // jornadas laborales que trabaja en el día, 
        'advance', // anticipos en caso que lo tenga
        'user_id', // puede anexar el correo del usuario personal para ver un historial de las empresas a las que trabaja
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function salaryPays()
    {
        return $this->hasMany('App\Models\SalaryPay', 'employee_id');
    }

    public function controlJonadas()
    {
        return $this->hasMany('App\Models\ControlJornada', 'employee_id');
    }

}
