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
            $table->string('code_anex',10)->nullable();
            $table->string('description',220);
            $table->float('porcent',5,2);
            $table->tinyInteger('destine'); // retención a la fuente, al iva u otros
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
