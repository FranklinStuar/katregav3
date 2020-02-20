<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $fillable = [
        'cod_local', // numero de la empresa o local
        'cod_terminal', // numero de la terminal de emision, se utiliza de la empresa
        'cod_currenct', // número secuencial de la factura
        'cant_prints', // cantidad de impresiones que ha tenido 
        'access_key', // clave de acceso para el sri
        'guia_remision',
        'date',
        //Forma en la que se paga
        'total_credit_card', // total del dinero que se paga con tarjeta de crédito
        'total_debit_card', // total del dinero que se paga con tarjeta de débito
        'total_cash', // total del dinero que se da en efectivo
        'total_credit', // total del dinero que se da a credito
        'time_credit', // tiempo que se le da crédito o se recive crédito con la operacion
        // montos internos de la facturación
        'total_tax', 
        'total_not_tax',
        'tax',
        'discount_tax',
        'discount_not_tax',
        'porcent_disc_tax',
        'porcent_disc_not_iva',
        'status', // el estado para la facturación electrónica
        'user_id', // vendedor
        'client_id',
        'company_id',

        'pdf_print', // se genera un pdf de la factura a imprimir en base a una plantilla, seguridad en caso de modificacin de datos
        'xml_sri', // xml generado por el sistema para ser enviado al sri
        'pdf_sri', // pdf que se genera cuando el xml ha sido firmado
        'xml_firma_sri', // se firmado por el sri
    ];
}
