<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MALOAISP')->unsigned();
            $table->string('TENSP');
            $table->integer('TRANGTHAI');
            $table->string('HINHANH');
            $table->string('MOTA');            
            $table->timestamps();

            $table->foreign('MALOAISP')->references('id')->on('loaisanphams');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
