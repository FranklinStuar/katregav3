<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('activity',90);
            $table->string('comment');
            $table->string('repsonsable');
            $table->unsignedBigInteger('maintenance_id');
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
        Schema::table('maintenance_details', function (Blueprint $table) {
        });
        Schema::dropIfExists('maintenance_details');
    }
}
