<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
	Schema::create('users', function (Blueprint $table) {
	    $table->increments('id');
	    $table->string('login')->unique();
	    $table->string('email')->unique();
	    $table->string('password');
	    $table->string('name');
	    $table->string('gender');
	    $table->string('user_photo');
	    $table->rememberToken();
	    $table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
	Schema::drop('users');
    }

}
