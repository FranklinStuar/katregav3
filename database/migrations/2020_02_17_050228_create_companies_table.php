<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('identification',13);
            $table->string('representant',50);
            $table->string('address',50)->nullable();
            $table->string('email',60)->nullable();
            
            // el tipo de documento para indicar si está usando el acceso al sri o es informal
            // también sirve para saber el tipo de documento que se va a entregar y si puede o o recibir retencion
            $table->enum('type_identification',['ruc','rise','other'])->default('other'); 

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('companies');
    }
}
