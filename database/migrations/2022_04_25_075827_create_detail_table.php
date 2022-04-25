<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration {
    public function up() {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('album');
            $table->bigInteger('songId')->unsigned();
            $table->timestamps();

            $table->foreign('songId')->references('id')->on('songs');
        });
    }

    public function down() {
        Schema::dropIfExists('details');
    }
}
