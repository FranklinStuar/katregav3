<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_local',3); // numero de la empresa o local
            $table->string('cod_terminal',3); // numero de la terminal de emision, se utiliza de la empresa
            $table->string('cod_currenct',9); // número secuencial de la factura
            $table->tinyInteger('cant_prints'); // cantidad de impresiones que ha tenido 
            $table->string('access_key',49)->nullable(); // clave de acceso para el sri
            $table->string('guia_remision',15)->nullable();
            $table->date('date');
            //Forma en la que se paga
            $table->float('total_credit_card',8,2); // total del dinero que se paga con tarjeta de crédito
            $table->float('total_debit_card',8,2); // total del dinero que se paga con tarjeta de débito
            $table->float('total_cash',8,2); // total del dinero que se da en efectivo
            $table->float('total_credit',8,2)->default(0); // total del dinero que se da a credito
            $table->tinyInteger('time_credit')->default(0); // tiempo que se le da crédito o se recive crédito con la operacion
            // montos internos de la facturación
            $table->float('total_tax',8,2); 
            $table->float('total_not_tax',8,2);
            $table->float('tax',8,2);
            $table->float('discount_tax',8,2);
            $table->float('discount_not_tax',8,2);
            $table->tinyInteger('porcent_disc_tax');
            $table->tinyInteger('porcent_disc_not_iva');
            $table->enum('status',['none','send','error','anull'])->default('none'); // el estado para la facturación electrónica
            $table->unsignedBigInteger('user_id'); // vendedor
            $table->unsignedBigInteger('client_id');
            $table->unsignedInteger('company_id');

            $table->string('pdf_print'); // se genera un pdf de la factura a imprimir en base a una plantilla, seguridad en caso de modificacin de datos
            $table->string('xml_sri')->nullable(); // xml generado por el sistema para ser enviado al sri
            $table->string('pdf_sri')->nullable(); // pdf que se genera cuando el xml ha sido firmado
            $table->string('xml_firma_sri')->nullable(); // se firmado por el sri

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
        Schema::table('bills', function (Blueprint $table) {
        });
        Schema::dropIfExists('bills');
    }
}
