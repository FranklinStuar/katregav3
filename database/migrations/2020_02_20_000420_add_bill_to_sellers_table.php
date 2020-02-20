<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBillToSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sellers', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('bill_id');
            $table->foreign('bill_id')->references('id')->on('bills');
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
            $table->dropForeign(['bill_id']);
        });
    }
}
