<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSRSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_r_s_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_pembelajaran_id');
            $table->integer('kanji_id');
            $table->integer('penambah');
            $table->dateTime('waktu_review');
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
        Schema::dropIfExists('s_r_s_s');
    }
}
