<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'identification',
        'representant',
        'address',
        'email',
        'user_id',

        // para los documentos a entregar
        'type_document', // ninguna, nota de venta, factura, facturacion electronica
        // monto mínimo al momento de generar una factura, sirve para cuando se entregue nota de venta y el monto mínimo es $12 y para artesanos que es de $4
        'amount_min_bill',
        // los códigos para la factura
        'cod_local_bill', // Número del local
        'cod_terminal_bill', // número de terminal
        'cod_currenct_bill', // número actual de la factura
        // configuración del sri - todo en español para entender más fácilmente
        'ambiente_sri',
        'tipo_emision_sri', // producción o prueba
        'file_sri', // archivo que da el sri para la facturacion electrónica
        'contrasena_sri', // contraseña que viene con la clave del sri
    ];
}
