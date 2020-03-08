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
            $table->string('identification',13)->nullable();
            $table->enum('type_identification',['ruc','rise','none'])->default('none');  // tipo de indentificaciòn para indicarnos que es lo que nos entrega le proveedor
            $table->string('name',80); 
            $table->string('representant',80)->nullable();
            $table->string('email',100);
            $table->string('address',60)->nullable();
            $table->string('phone',13)->nullable();
            $table->string('movile',13)->nullable();
            $table->string('country',20)->default('Ecuador');
            $table->enum('type_document',['bill','note_seller']); // factura o nota de venta 
            $table->float('deb',8,2)->default(0); // deuda actual que se tiene con el proveedor
            $table->boolean('active')->default(true);
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
        Schema::table('providers', function (Blueprint $table) {
        });
        Schema::dropIfExists('providers');
    }
}
