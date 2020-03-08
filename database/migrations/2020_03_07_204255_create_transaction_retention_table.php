<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionRetentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_retention', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedInteger('retention_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_retention', function (Blueprint $table) {
        });
        Schema::dropIfExists('transaction_retention');
    }
}
