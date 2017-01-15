<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoboUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robo_users', function (Blueprint $table) {
            $table->increments('id');
           // $table->integer('user_id')->unsinged();
            $table->boolean('account_status')->default(false);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('business_name')->nullable();
            $table->string('industry');
            $table->string('referred_by');
            $table->timestamps();

//            $table->foreign('user_id')
//                   ->references('id')
//                   ->on('users')
//                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('robo_users');
    }
}
