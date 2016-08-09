<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');//pk
            $table->string('title');
            $table->text('post');
            $table->integer('user_id')->unsigned()->index();//link to user fk
            $table->timestamps();//created at & updated at
            $table->date('post_at_time');//for posting at later time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
