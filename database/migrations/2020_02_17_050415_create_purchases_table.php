<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable();
            $table->integer('code'); // el codigo que se genera automaticamente para la empresa y listar por id
            $table->string('bill',17); // el numero de factura que nos entregan
            $table->enum('type_document',['bill','note','none']); // tipo de documento que nos entrega el 
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign(['provider_id']);
            $table->dropForeign(['transaction_id']);
        });
        Schema::dropIfExists('purchases');
    }
}
