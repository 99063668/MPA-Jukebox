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
            $table->string('song');
            $table->string('album');
            $table->string('artist');
            $table->time('duration');
            $table->bigInteger('genreId')->unsigned();
            $table->timestamps();

            $table->foreign('genreId')->references('id')->on('genres');  
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
