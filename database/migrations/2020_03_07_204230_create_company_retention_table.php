<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRetentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_retention', function (Blueprint $table) {
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('retention_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_retention', function (Blueprint $table) {
        });
        Schema::dropIfExists('company_retention');
    }
}
