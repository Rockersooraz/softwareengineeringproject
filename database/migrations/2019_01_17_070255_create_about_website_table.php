<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_website', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('phone');
            $table->string('email');
            $table->longtext('description');
            $table->string('address1');
            $table->string('address2');

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
        Schema::dropIfExists('about_website');
    }
}
