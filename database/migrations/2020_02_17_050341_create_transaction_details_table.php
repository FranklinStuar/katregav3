<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('cant',6,2);
            $table->float('unit_value',8,2);
            $table->float('discount',8,2);
            $table->tinyInteger('porcent_disc');
            $table->float('sub_total',8,2); // subtotal es el resultado de cantidad x valor unitario restando descuento
            $table->float('tax',8,2); // el iva va en valores y no en indicar si tiene o no iva en boolean
            $table->float('total',8,2);
            $table->string('observation');
            $table->float('aditional_stock',4,2); // si se da algo màs como regalo, muy usado al momento de hacer inventario, de esa manera se sabe donde se va el producto
            $table->tinyInteger('aditional_time'); // en caso que el tiempo de entrega ya sea del producto o servicio sea adicional
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::table('transaction_details', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
        });
        Schema::dropIfExists('transaction_details');
    }
}
