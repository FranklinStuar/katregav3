<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movement_money', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('cash',8,2)->default(0); // cuanto se agrega o quita en efectivo
            $table->float('bank',8,2)->default(0); // cuanto se agrega o quita en bancos
            $table->float('total_cash',8,2)->default(0); // el total actual en efectivo
            $table->float('total_bank',8,2)->default(0); //  Total actual en bancos
            $table->string('comment'); // el motivo del cambio
            // el tipo de movimiento realizado, se agregará por numeros dependiendo de lo que vaya saliendo 
            // de momento se tiene pensado en compras, ventas, cambio de banco a efectivo y viceversa
            $table->tinyInteger('type'); 
            $table->string('responsable'); // se agrega solo el nombre de la persona indicada
            $table->unsignedInteger('company_id');
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
        Schema::table('movement_money', function (Blueprint $table) {
        });
        Schema::dropIfExists('movement_money');
    }
}
