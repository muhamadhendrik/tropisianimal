<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //brt = berita
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul_brt');
            $table->string('slug')->unique();
            $table->string('berita');
            $table->string('thumbnail_brt');
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
        Schema::dropIfExists('berita');
    }
}
