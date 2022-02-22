<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiohangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giohangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MAKHACHHANG')->unsigned();;
            $table->integer('MACHITIETSANPHAM')->unsigned();;
            $table->integer('SOLUONG');
            $table->integer('TRANGTHAI');
            $table->timestamps();
            $table->foreign('MAKHACHHANG')->references('id')->on('taikhoans');
            $table->foreign('MACHITIETSANPHAM')->references('id')->on('chitietsanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giohangs');
    }
}
