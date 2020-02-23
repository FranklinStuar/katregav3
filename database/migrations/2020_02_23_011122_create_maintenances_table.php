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
            $table->enum('type',['c','pv','pd']); // correctivo, preventivo, predictivo
            $table->date('next_maintenance')->nullable(); // fecha de la proxima revision en caso de existir
            $table->unsignedBigInteger('seller_id')->nullable(); // en caso que el mantenimiento esté vinvulado a alguna venta en concreto, nulo porque puede dar mantenimiento gratuito al ser panas o algo parecido
            $table->unsignedBigInteger('company_id');
            $table->foreign('seller_id')->references('id')->on('companies');
            $table->foreign('company_id')->references('id')->on('companies');
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
            $table->dropForeign(['seller_id']);
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('maintenances');
    }
}
