<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedInteger('type_client_id')->nullable();
            $table->unsignedInteger('category_client_id')->nullable();
            $table->unsignedInteger('zone_client_id')->nullable();
            $table->foreign('type_client_id')->references('id')->on('type_clients');
            $table->foreign('category_client_id')->references('id')->on('category_clients');
            $table->foreign('zone_client_id')->references('id')->on('zone_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['type_client_id']);
            $table->dropForeign(['category_client_id']);
            $table->dropForeign(['zone_client_id']);
        });
    }
}
