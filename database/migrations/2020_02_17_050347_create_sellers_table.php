<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',17);
            $table->string('guia_remision',15)->nullable();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('client_id');
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
        Schema::table('sellers', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['client_id']);
        });
        Schema::dropIfExists('sellers');
    }
}
