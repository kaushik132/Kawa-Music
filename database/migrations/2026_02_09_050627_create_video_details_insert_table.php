<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoDetailsInsertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_details_insert', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_num')->nullable();
            $table->string('video_image')->nullable();
            $table->string('alt')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('artist_id')->nullable();
            $table->string('title')->nullable();
            $table->string('view')->nullable();
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
        Schema::dropIfExists('video_details_insert');
    }
}
