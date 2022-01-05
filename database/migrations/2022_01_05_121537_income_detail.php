<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncomeDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IncomeDetail', function (Blueprint $table) {
            $table->string('INCOME_INVOICE_DETAIL_ID');
            $table->string('INCOME_INVOICE_ID');
            $table->string('PRODUCT_ID');
            $table->integer('QUANTITY');
            $table->integer('UNIT_PRICE_INCOME');
            $table->integer('TOTAL');
            $table->integer('STATUS');
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
        Schema::dropIfExists('IncomeDetail');
    }
}
