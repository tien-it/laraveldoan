<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Pricing', function (Blueprint $table) {
           $table->increments('PRODUCT_ID');
           $table->string('TOTAL_INCOME');
           $table->string('REMAIN');
           $table->string('CHANGE_COUNT');
           $table->char('NEW_CHANGE_COUNT');
           $table->string('CURRENT_PRICE');
           $table->string('NEW_PRICE');
           $table->string('INCOME_INVOICE_DETAIL_ID');
           $table->dateTime('birtNEW_INCOME_INVOICE_DETAIL_IDhday');
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
        Schema::dropIfExists('Pricing');
    }
}
