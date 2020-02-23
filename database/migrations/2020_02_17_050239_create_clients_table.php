<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',80);
            $table->string('identification',13);
            $table->string('address',60);
            $table->string('phone',13);
            $table->tinyInteger('type_price')->default(1); // minorista, mayorista, proveedores, distribuidores, fieles
            $table->tinyInteger('disscount')->default(0); // descuento en porcentaje
            $table->boolean('email_marketing')->default(false); // si se hace email markting al cliente o no
            $table->boolean('whatsapp_marketing')->default(false); // si se hace markting al cliente por whatsapp
            $table->float('deb',8,2); // deuda actual que tiene el cliente
            $table->float('credit',8,2); // Máximo que se le permite tener deuda al cliente
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
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('clients');
    }
}
