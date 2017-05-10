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
	    $table->integer('category_id');
	    $table->string('title');
	    $table->string('content');
	    $table->string('url');
	    $table->string('photo');
	    $table->integer('author_id');
	    $table->integer('likes');
	    $table->integer('comment_id');
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