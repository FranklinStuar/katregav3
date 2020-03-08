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
            
            $table->string('representant',50); // representant de la empresa se da solo cuando utiliza el sri
            
            // los códigos para la factura o la nota de venta actuales
            $table->string('cod_local_bill',3)->default('1'); // Número del local
            $table->string('cod_terminal_bill',3)->default('1'); // número de terminal
            $table->string('cod_currenct_bill',9)->default('1'); // número actual de la factura
            
            // para los documentos a entregar
            $table->smallInteger('amount_min_bill')->default(0); // monto mínimo al momento de generar una factura, sirve para cuando se entregue nota de venta y el monto mínimo es $12 y para artesanos que es de $4
            $table->smallInteger('amount_max_bill')->default(0);  // monto máximo permitido para realizar una factura, utilizado en caso de utilizar notas de venta del sri
            
            // configuración del sri
            $table->tinyInteger('ambiente_sri')->default(1); // 1 pruebas, 2 produccion
            $table->string('file_sri',49)->nullable(); // archivo que da el sri para
            $table->string('password_sri')->nullable(); // contraseña que viene con la clave del sri
            
            //Documentos electrónicos disponibles a ser usados por el sri
            $table->boolean('bill_electronic')->default(false); // facturacion
            $table->boolean('note_debit_electronic')->default(false); // notas de debito
            $table->boolean('note_credit_electronic')->default(false); // notas de credito
            $table->boolean('retention_electronic')->default(false); // retenciones
            $table->boolean('remision_guide_electronic')->default(false); // guias de remision

            $table->unsignedInteger('company_id');
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
        });
        Schema::dropIfExists('sris');
    }
}
