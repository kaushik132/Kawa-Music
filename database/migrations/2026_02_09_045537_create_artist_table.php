<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_image')->nullable();
            $table->string('banner_alt')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('rating')->nullable();
            $table->string('performances')->nullable();
            $table->string('artist_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('artist_role')->nullable();
            $table->string('location')->nullable();
            $table->string('experience')->nullable();
            $table->string('watch_performance')->nullable();
            $table->string('live_performance')->nullable();
            $table->string('awards')->nullable();
            $table->string('stage_shows')->nullable();
            $table->text('description')->nullable();
            $table->string('achievements')->nullable();
            $table->string('videos_itinary')->nullable();
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
        Schema::dropIfExists('artist');
    }
}
