<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->integer('MAHOADON')->unsigned();;
            $table->integer('MACHITIETSANPHAM')->unsigned();;
            $table->integer('SOLUONG');
            $table->integer('DONGIA');
            $table->integer('THANHTIEN');
            $table->integer('TRANGTHAI');
            $table->timestamps();

            $table->foreign('MAHOADON')->references('id')->on('hoadons');
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
        Schema::dropIfExists('chitiethoadons');
    }
}
