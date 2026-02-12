<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instgram', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('artistname_id')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('likes_num')->nullable();
            $table->string('comment_num')->nullable();
            $table->string('post_title')->nullable();
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
        Schema::dropIfExists('instgram');
    }
}
