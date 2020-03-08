<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_mechanics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('km_init')->default(0); // kilometraje con el que ingresa 
            $table->integer('km_finish')->default(0); // kilometraje con el que sale
            $table->integer('next_change')->default(0); // cuando es el siguiente cambio 
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
        Schema::table('maintenance_mechanics', function (Blueprint $table) {
        });
        Schema::dropIfExists('maintenance_mechanics');
    }
}
