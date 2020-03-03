<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',80);
            $table->string('email',100);
            $table->string('identification',13)->nullable();
            $table->string('address',60)->nullable();
            $table->string('phone',13)->nullable();
            $table->string('movile',13)->nullable();
            $table->float('deb',8,2)->default(0); // deuda actual que se tiene con el proveedor
            $table->boolean('active')->default(true);
            $table->enum('type_identification',['ruc','rise','none'])->default('none');  // tipo de indentificaciòn para indicarnos que es lo que nos entrega le proveedor
            $table->unsignedBigInteger('company_id');
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
        Schema::table('providers', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('providers');
    }
}
