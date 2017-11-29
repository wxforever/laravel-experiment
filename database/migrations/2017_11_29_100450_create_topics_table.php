<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration 
{
	public function up()
	{
		Schema::create('topics', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->text('body');
            $table->unsigned('user_id')->index();
            $table->unsigned('category_id')->index();
            $table->unsigned('reply_count')->default(0);
            $table->unsigned('view_count')->default(0);
            $table->unsigned('last_reply_user_id')->default(0);
            $table->unsigned('order')->default(0);
            $table->text('excerpt');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('topics');
	}
}
