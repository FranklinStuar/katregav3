<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',15);
            $table->string('name',80);
            $table->string('alternative_name',80)->nullable(); 
            $table->double('disscount_fix',5,2)->default(0); // descuento en porcentaje
            $table->boolean('tax')->default(true);
            $table->boolean('seller')->default(true);
            $table->boolean('purchase')->default(true);
            $table->float('price_1',8,2)->default(0); // precios del 1 al 5
            $table->float('price_2',8,2)->default(0); // precios del 1 al 5
            $table->float('price_3',8,2)->default(0); // precios del 1 al 5
            $table->float('price_4',8,2)->default(0); // precios del 1 al 5
            $table->float('price_5',8,2)->default(0); // precios del 1 al 5
            $table->boolean('active')->default(true);
            $table->date('init_special')->nullable(); // fecha de inicio de descuento especial
            $table->date('finish_special')->nullable(); // fecha en que termina el descuento especial
            $table->double('disscount_special',5,2)->default(0); // descuento especial en porcentaje
            $table->unsignedBigInteger('measurement_id');
            $table->unsignedBigInteger('product_group_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('measurement_id')->references('id')->on('measurements');
            $table->foreign('product_group_id')->references('id')->on('product_groups');
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
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign(['measurement_id']);
            $table->dropForeign(['product_group_id']);
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('stocks');
    }
}
