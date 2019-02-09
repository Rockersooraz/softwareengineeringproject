<?php

use Illuminate\Support\Facades\Schema;
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
             $table->increments('id');
             $table->string('title');
             $table->string('merchant_id')->required();
             $table->string('filename');
             $table->integer('price');
             $table->string('location')->nullable();
             $table->double('latitude',20,10)->nullable();
             $table->double('longitude',20,10)->nullable();
             $table->longtext('description');
             $table->string('category_id');
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
        Schema::dropIfExists('posts');
    }
}
