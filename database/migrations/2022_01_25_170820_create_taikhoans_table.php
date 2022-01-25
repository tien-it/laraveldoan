<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaikhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TENDANGNHAP');
            $table->string('HOVATEN');
            $table->string('MATKHAU');
            $table->string('SODIENTHOAI');
            $table->string('EMAIL');
            $table->string('DIACHI');
            $table->string('GIOITINH');
            $table->date('NGAYSINH');
            $table->integer('ISADMIN');
            $table->integer('TRANGTHAI');
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
        Schema::dropIfExists('taikhoans');
    }
}
