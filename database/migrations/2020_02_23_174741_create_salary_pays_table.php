<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_pays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable(); // fecha en la que se realiza la nomina
            $table->float('salary',7,2);
            $table->float('extra_hours',5,2);
            $table->float('fondo_reserva',5,2); // lo que se adiciona al suelo y horas extras para el pago de los fondos de reserva
            $table->float('iess_employee',7,2); // lo que paga el empleado al iess
            $table->float('iess_company',7,2); // lo que paga la empresa al iess
            $table->float('advance',7,2); // anticipos
            $table->float('discount',7,2); // descuentos en caso de existir
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::table('salary_pays', function (Blueprint $table) {
            $table->dropForeign(['employee_id']);
        });
        Schema::dropIfExists('salary_pays');
    }
}
