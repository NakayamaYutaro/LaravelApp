<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user',function (Blueprint $table){
            $table->increments('id');
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('email')->unique();
            $table->string('password');
        });
    }
    /**
     * Reverse the migrations.
     * 
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('user');
    }
}
