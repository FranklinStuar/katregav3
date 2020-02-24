<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryPay extends Model
{
    //
    protected $fillable = [
        'date', // fecha en la que se realiza la nomina
        'salary',
        'extra_hours',
        'fondo_reserva', // lo que se adiciona al sueldo y horas extras para el pago de los fondos de reserva
        'iess_employee', // lo que paga el empleado al iess
        'iess_company', // lo que paga la empresa al iess
        'advance', // anticipos se le resta al salario
        'discount', // descuentos en caso de existir
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
