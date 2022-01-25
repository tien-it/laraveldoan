<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MAKHACHHANG')->unsigned();
            $table->string('SDT');
            $table->string('DIACHI');
            $table->string('GHICHU');
            $table->datetime('NGAYLAP');
            $table->datetime('NGAYGIAO');
            $table->integer('TONGTIEN');
            $table->integer('TRANGTHAI');
            $table->timestamps();

            $table->foreign('MAKHACHHANG')->references('id')->on('taikhoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}
