<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_jornadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('into')->nullable(); // hora de ingreso
            $table->timestamp('exit')->nullable(); // hora de salida
            $table->unsignedBigInteger('employee_id');
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
        Schema::table('control_jornadas', function (Blueprint $table) {
        });
        Schema::dropIfExists('control_jornadas');
    }
}
