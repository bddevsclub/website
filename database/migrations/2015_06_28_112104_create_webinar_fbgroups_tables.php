<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebinarFbgroupsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bddevs_webinars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('video_embed');
            $table->text('description');
            $table->dateTime('date_time');

        });

        Schema::create('bddevs_fbgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->text('url');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bddevs_webinars');
        Schema::drop('bddevs_fbgroups');
    }
}
