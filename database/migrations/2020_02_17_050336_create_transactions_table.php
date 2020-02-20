<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date');
            $table->integer('cod');
            $table->tinyInteger('type_price'); // 1 a 5 de los precios elegidos para los productos
            $table->enum('type_payment',['CT','CR']); // forma de pago 
            $table->float('total_tax',8,2);
            $table->float('total_not_tax',8,2);
            $table->float('tax',8,2);
            $table->float('discount_taxx',8,2);
            $table->float('discount_not_tax',8,2);
            $table->float('services',8,2); // son otro servicios extras fuera de la venta que no se facturan
            $table->float('transport',8,2);
            $table->tinyInteger('porcent_disc_tax');
            $table->tinyInteger('porcent_disc_not_iva');
            $table->string('observation',200)->nullable();
            $table->enum('status',['active','canceled','anull'])->default('active'); // 
            $table->unsignedBigInteger('user_id'); // vendedor
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['client_id']);
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('transactions');
    }
}
