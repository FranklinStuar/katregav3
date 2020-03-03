<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type_inventory')->default(1); // tipos de inventarios, se realizará según se avance
            $table->boolean('without_stock')->default(false);
            $table->float('sotck_total',7,2)->default(0); // stock actual para no tener que hacer una actividad en la base de datos en cada consulta
            $table->unsignedBigInteger('mark_id');
            $table->unsignedBigInteger('line_id');
            $table->unsignedBigInteger('stock_id');
            $table->foreign('mark_id')->references('id')->on('marks');
            $table->foreign('line_id')->references('id')->on('product_lines');
            $table->foreign('stock_id')->references('id')->on('stocks');
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['mark_id']);
            $table->dropForeign(['line_id']);
            $table->dropForeign(['stock_id']);
        });
        Schema::dropIfExists('products');
    }
}
