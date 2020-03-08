<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identification',13)->nullable(); // numero de cedula o identificador
            $table->string('name'); // nombre del empleado
            $table->string('email')->unique(); // correo único que se brinda por parte de la empresa, el correo no es personal
            $table->date('birth')->nullable();
            $table->string('address',80)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('movile',15)->nullable();
            $table->string('charge',50)->nullable();
            $table->float('salary',7,2)->default(0);
            $table->tinyInteger('journal')->default(1); // jornadas laborales que trabaja en el día, 
            $table->float('advance',7,2)->default(0); // anticipos en caso que lo tenga
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::table('employees', function (Blueprint $table) {
        });
        Schema::dropIfExists('employees');
    }
}
