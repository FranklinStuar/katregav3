<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retentions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',10);
            $table->string('description',100);
            $table->float('porcent',5,2);
            $table->enum('destine',['font','tax']); // retención a la fuente o al iva
            $table->enum('type',['m','s'])->default('m'); // mercaderia o servicio
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
        Schema::table('retentions', function (Blueprint $table) {
        });
        Schema::dropIfExists('retentions');
    }
}
