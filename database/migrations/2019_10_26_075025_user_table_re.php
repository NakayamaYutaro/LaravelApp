<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTableRe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_time',function (Blueprint $table){
            $table->increments('id');
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestanmps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_time');
    }
}
