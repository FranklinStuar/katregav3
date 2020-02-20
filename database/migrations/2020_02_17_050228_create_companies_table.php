<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('identification',13);
            $table->string('representant',50);
            $table->string('address',50);
            $table->string('email',60);
            // para los documentos a entregar
            $table->enum('type_document',['none','note','bill','electronic'])->default('none'); // ninguna, nota de venta, factura, facturacion electronica
            // monto mínimo al momento de generar una factura, sirve para cuando se entregue nota de venta y el monto mínimo es $12 y para artesanos que es de $4
            $table->tinyInteger('amount_min_bill')->default(0); 
            // los códigos para la factura
            $table->string('cod_local_bill',3)->default('1'); // Número del local
            $table->string('cod_terminal_bill',3)->default('1'); // número de terminal
            $table->string('cod_currenct_bill',9)->default('1'); // número actual de la factura
            // configuración del sri - todo en español para entender más fácilmente
            $table->string('ambiente_sri');
            $table->string('tipo_emision_sri',1); // producción o prueba
            $table->string('file_sri',49); // archivo que da el sri para
            $table->string('contrasena_sri'); // contraseña que viene con la clave del sri

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('companies');
    }
}
