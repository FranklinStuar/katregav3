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
            //Forma en la que se paga
            $table->tinyInteger('type_price'); // 1 a 5 de los precios elegidos para los productos
            $table->float('total_cash',8,2); // total del dinero que se da en efectivo
            $table->float('total_credit',8,2)->default(0); // total del dinero que se da a credito
            $table->float('total_checkbook',8,2)->default(0); // total que se ha pagado o cobrado en cheque
            // montos internos de la facturación
            $table->float('total',8,2); // Total de la transaccion
            $table->float('total_tax',8,2);
            $table->float('total_not_tax',8,2);
            $table->float('tax',8,2);
            $table->float('discount_tax',8,2);
            $table->float('discount_not_tax',8,2);
            $table->tinyInteger('porcent_disc_tax');
            $table->tinyInteger('porcent_disc_not_iva');
            $table->float('interes',8,2); // en caso que tenga que pagar interés por algo aparte de la venta
            $table->float('services',8,2); // son otro servicios extras fuera de la venta que no se facturan
            $table->float('transport',8,2);
            $table->text('observation')->nullable();
            $table->unsignedBigInteger('user_id'); // vendedor o comprador cuando corresponda
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
        Schema::table('transactions', function (Blueprint $table) {
        });
        Schema::dropIfExists('transactions');
    }
}
