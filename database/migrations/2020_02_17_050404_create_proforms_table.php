<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable();
            $table->string('code',17);
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('client_id');
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
        Schema::table('proforms', function (Blueprint $table) {
        });
        Schema::dropIfExists('proforms');
    }
}
