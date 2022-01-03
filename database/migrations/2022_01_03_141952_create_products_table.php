<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->int('product_type_id');
            $table->string('name');
            $table->string('trademark');
            $table->string('production_address');
            $table->string('material');
            $table->string('style')->nullable();
            $table->string('colors')->nullable();
            $table->string('longs')->nullable();
            $table->string('width')->nullable();
            $table->string('insurance')->nullable();
            $table->string('description')->nullable();
            $table->bool('status');
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
        Schema::dropIfExists('products');
    }
}
