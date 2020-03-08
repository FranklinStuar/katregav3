<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('cant',6,2);
            $table->float('unit_value',8,2);
            $table->float('discount',8,2);
            $table->tinyInteger('porcent_disc');
            $table->float('sub_total',8,2); // subtotal es el resultado de cantidad x valor unitario restando descuento
            $table->float('tax',8,2); // el iva va en valores y no en indicar si tiene o no iva en boolean
            $table->float('total',8,2);
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('bill_id');
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
        Schema::table('bill_details', function (Blueprint $table) {
        });
        Schema::dropIfExists('bill_details');
    }
}
