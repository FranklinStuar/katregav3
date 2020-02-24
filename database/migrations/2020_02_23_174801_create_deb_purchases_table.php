<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deb_purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('deb_id');
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('deb_id')->references('id')->on('debs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deb_purchases', function (Blueprint $table) {
            $table->dropForeign(['purchase_id']);
            $table->dropForeign(['deb_id']);
        });
        Schema::dropIfExists('deb_purchases');
    }
}
