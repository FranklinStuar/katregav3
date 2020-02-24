<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',17);
            $table->timestamp('date')->nullable();
            $table->date('fecha_entrega'); // fecha en la que se entrega la orden
            $table->enum('status',['i','a','s','d']); // i=Ingresado, a=aceptado, s=vendido, d=rechazado
            $table->float('advancement',8,2)->default(0); // Adelanto con lo que se va a trabajar
            $table->unsignedBigInteger('seller_id')->nullable(); // cuando se termine se efectua en venta
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::table('order_sellers', function (Blueprint $table) {
            $table->dropForeign(['seller_id']);
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['client_id']);
        });
        Schema::dropIfExists('order_sellers');
    }
}
