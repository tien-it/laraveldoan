<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietsanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanphams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MASANPHAM')->unsigned();
            $table->string('THUONGHIEU');
            $table->string('NOISANXUAT');
            $table->string('CHATLIEU');
            $table->string('PHONGCACH');
            $table->string('MAUSAC');
            $table->string('CHIEUDAI');
            $table->string('CHIEURONG');
            $table->string('BAOHANH');
            $table->timestamps();

            $table->foreign('MASANPHAM')->references('id')->on('sanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietsanphams');
    }
}
