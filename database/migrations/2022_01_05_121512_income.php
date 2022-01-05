<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Income extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Income', function (Blueprint $table) {            
            $table->string('INCOME_INVOICE_ID');
            $table->string('ACCOUNT_ID');
            $table->string('FROMCPN');
            $table->datetime('ISSUE_DATE');
            $table->integer('TOTAL_AMOUNT');
            $table->integer('VAT');
            $table->integer('TOTAL_PAYMENT');
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
        Schema::dropIfExists('Income');
    }
}
