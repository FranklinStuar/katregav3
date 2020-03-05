<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sri extends Model
{
    protected $fillable = [
        'representant', // se da solo cuando hace uso del sri
        // los códigos para la factura o la nota de venta actuales
        'cod_local_bill', // Número del local
        'cod_terminal_bill', // número de terminal
        'cod_currenct_bill', // número actual de la factura
        
        // para los documentos a entregar
        'amount_min_bill', // monto mínimo al momento de generar una factura, sirve para cuando se entregue nota de venta y el monto mínimo es $12 y para artesanos que es de $4
        'amount_max_bill',  // monto máximo permitido para realizar una factura, utilizado en caso de utilizar notas de venta del sri
        
        // configuración del sri
        'ambiente_sri', // 1 pruebas, 2 produccion
        'file_sri', // archivo que da el sri para
        'password_sri', // contraseña que viene con la clave del sri
        
        //Documentos electrónicos disponibles a ser usados por el sri
        'bill_electronic', // facturacion
        'note_debit_electronic', // notas de debito
        'note_credit_electronic', // notas de credito
        'retention_electronic', // retenciones
        'remision_guide_electronic', // guias de remision

        'company_id',
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
}
