<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('accounts', function (Blueprint $table) {
           $table->increments('account_id');
           $table->string('username');
           $table->string('fullname');
           $table->string('password');
           $table->char('phone', 10);
           $table->string('email');
           $table->string('address')->nullable();
           $table->string('gender')->nullable();
           $table->dateTime('birthday')->nullable();
           $table->bool('isAdmin');
           $table->integer('status');
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
        Schema::dropIfExists('accounts');
    }
}
