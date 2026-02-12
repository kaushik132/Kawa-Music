<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_cat_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('gallery')->nullable();
            $table->string('rating')->nullable();
            $table->string('reviews')->nullable();
            $table->text('description')->nullable();
            $table->boolean('in_slock')->default('1')->nullable();
            $table->text('key_features')->nullable();
            $table->text('specifications')->nullable();
            $table->string('product_filter')->nullable();
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
        Schema::dropIfExists('product');
    }
}
