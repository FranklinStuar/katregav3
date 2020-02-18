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
            $table->enum('status',['ingress','accept','seller','dismiss']); // Ingresado, aceptado, vendido, rechazado
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('seller_id')->nullable(); // si fue aprovado se puede transformar en venta
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('seller_id')->references('id')->on('sellers');
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
        Schema::table('order_sellers', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropForeign(['seller_id']);
            $table->dropForeign(['transaction_id']);
        });
        Schema::dropIfExists('order_sellers');
    }
}
