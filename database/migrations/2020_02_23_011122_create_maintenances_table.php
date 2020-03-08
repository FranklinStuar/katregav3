<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullabe(); // fecha que se realiza el mantenimiento y con el horario para revisar en el mejor momento para hacerle publicidad
            $table->string('observation')->nullable();
            $table->tinyInteger('type_maintenance'); // 1:correctivo, 2:preventivo, 3:predictivo, 4:programado, 5:por periodo de tiempo
            $table->date('next_maintenance')->nullable(); // fecha de la proxima revision en caso de existir
            $table->unsignedBigInteger('seller_id')->nullable(); // en caso que el mantenimiento esté vinvulado a alguna venta en concreto, nulo porque puede dar mantenimiento gratuito al ser panas o algo parecido
            $table->unsignedBigInteger('client_id');
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
        Schema::table('maintenances', function (Blueprint $table) {
        });
        Schema::dropIfExists('maintenances');
    }
}
