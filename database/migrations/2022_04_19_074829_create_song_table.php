<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('album');
            $table->string('artist');
            $table->time('duration');
            $table->string('year');
            $table->string('audio');
            $table->bigInteger('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song');
    }
}
