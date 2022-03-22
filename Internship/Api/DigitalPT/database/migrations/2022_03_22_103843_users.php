<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('fullname');
            $table->date('dateofbirth');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('level');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag');
            $table->timestamps();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('link');
            $table->timestamps();
        });



        Schema::create('playlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('playlist-name');
            $table->unsignedBigInteger('fk_video_id');
            $table->foreign('fk_video_id')->references('id')->on('videos')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tag_video', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_video_id');
            $table->foreign('fk_video_id')->references('id')->on('videos')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('fk_tag_id')->unsigned();
            $table->foreign('fk_tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
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
        //
    }
}
