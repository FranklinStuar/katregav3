<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sris', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // los códigos para la factura o la nota de venta actuales
            $table->string('cod_local_bill',3)->default('1'); // Número del local
            $table->string('cod_terminal_bill',3)->default('1'); // número de terminal
            $table->string('cod_currenct_bill',9)->default('1'); // número actual de la factura
            
            // para los documentos a entregar
            $table->tinyInteger('amount_min_bill')->default(0); // monto mínimo al momento de generar una factura, sirve para cuando se entregue nota de venta y el monto mínimo es $12 y para artesanos que es de $4
            $table->tinyInteger('amount_max_bill')->default(0);  // monto máximo permitido para realizar una factura, utilizado en caso de utilizar notas de venta del sri
            
            // configuración del sri
            $table->tinyInteger('ambiente_sri')->defaut(1); // 1 pruebas, 2 produccion
            $table->string('file_sri',49); // archivo que da el sri para
            $table->string('password_sri'); // contraseña que viene con la clave del sri
            
            //Documentos electrónicos disponibles a ser usados por el sri
            $table->boolean('bill_electronic'); // facturacion
            $table->boolean('note_debit_electronic'); // notas de debito
            $table->boolean('note_credit_electronic'); // notas de credito
            $table->boolean('retention_electronic'); // retenciones
            $table->boolean('remision_guide_electronic'); // guias de remision

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sris', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('sris');
    }
}
