<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_pembelajaran_id');
            $table->string('data_soal',1000);
            $table->string('data_jawaban',1000);
            $table->string('kunci_jawaban',1000);
            $table->string('jawaban_peserta',1000)->nullable();
            $table->integer('skor')->nullable();
            $table->string('keterangan',1000)->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}
