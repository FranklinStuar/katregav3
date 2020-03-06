<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRetentionToProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->unsignedInteger('retention_font')->nullable();
            $table->unsignedInteger('retention_tax')->nullable();
            $table->foreign('retention_font')->references('id')->on('retentions');
            $table->foreign('retention_tax')->references('id')->on('retentions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->dropForeign(['retention_font']);
            $table->dropForeign(['retention_tax']);
        });
    }
}
