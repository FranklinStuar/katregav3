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
            $table->increments('id');
            $table->string('code',15)->unique();
            $table->string('name',50);
            $table->string('identification',13);
            $table->string('address',50)->nullable();
            $table->string('phone',150)->nullable();
            $table->string('email',60)->nullable();
            $table->boolean('access_sri',60)->default(false); // indica si lleva la configuración del sri o no
            
            // Montos economicos con los que va a trabajar la empresa
            $table->float('amount_chash',8,2)->default(0); // monto de dinero en efectivo
            $table->float('amount_bank',8,2)->default(0); // monto de dinero en banco
            
            // el tipo de documento para indicar si está usando el acceso al sri o es informal
            // también sirve para saber el tipo de documento que se va a entregar y si puede o o recibir retencion
            $table->enum('type_identification',['ruc','rise','other'])->default('other'); 

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
        });
        Schema::dropIfExists('companies');
    }
}
