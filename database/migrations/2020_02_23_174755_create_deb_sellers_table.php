<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deb_sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('deb_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
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
        Schema::table('deb_sellers', function (Blueprint $table) {
            $table->dropForeign(['seller_id']);
            $table->dropForeign(['deb_id']);
        });
        Schema::dropIfExists('deb_sellers');
    }
}
