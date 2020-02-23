<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Si el monto maximo super el 0 (cero) en la factura se dará un limite también de lo que puede facturar para tener en cuenta el momento de realizar la venta
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date')->nullable();
            $table->integer('code'); // numracion continua que se sigue por empresa y no id en general
            $table->float('retention_tax',8,2)->default(0); // total del dinero que se da a credito
            $table->float('retention_source',8,2)->default(0); // total del dinero que se da a credito
            $table->string('num_retention_tax',30)->nullable(); // codigo de retencion al iva
            $table->string('num_retention_source',30)->nullable(); // codigo de retencion a la fuente
            $table->boolean('seller_completed')->default(false); // indica si la compra ha sido realizada o se mantiene como proforma o como orden de pedido
            $table->string('guia_remision',15)->nullable(); // el numero de guia de remision que se entrega al momento de realizar la venta por transporte
            $table->enum('status',['active','canceled','anull'])->default('active'); // 
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::table('sellers', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['client_id']);
        });
        Schema::dropIfExists('sellers');
    }
}
