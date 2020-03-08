<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderRetentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_retention', function (Blueprint $table) {
            $table->unsignedBigInteger('provider_id');
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
        Schema::table('provider_retention', function (Blueprint $table) {
        });
        Schema::dropIfExists('provider_retention');
    }
}
