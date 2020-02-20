<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable(); // fecha en la que se ingresa el bloque de productos
            $table->float('cant',7,2)->default(0); // cantidad que se ingresa a principio
            $table->float('stock',7,2)->default(0); // cantidad disponible
            $table->float('cost',8,2); // costo por el cual se ingresa el producto
            $table->float('price',8,2); // precio estimado de venta
            $table->date('expiration')->nullable(); // fecha de expiración del producto en caso que se registre

            $table->unsignedBigInteger('product_id');            
            $table->integer('inventory_id'); // id de la tabla que utiliza el inventario
            $table->string('inventory_type'); //nombre de la tabla que utiliza el inventario
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('inventories');
    }
}
