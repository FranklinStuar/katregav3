<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('observations'); // observaciones acerca de la deuda
            $table->date('date_pay'); // fecha en la que se asigna pagar, si no paga completo la fecha cambia a otra fecha
            $table->date('date_payed'); // fecha en la que cancela todo, 
            $table->float('amount',7,2); // monto que se registra en deuda
            $table->float('amount_payed',7,2); // monto que ha pagado, puede ser en su totalidad o parcial
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps(); // fechas de registro y modificacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('debs', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('debs');
    }
}
