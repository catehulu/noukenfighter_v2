<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanjis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('jlpt_id');
            $table->integer('jouyou_id')->nullable();
            $table->string('keyword',30);
            $table->string('kanji',5);
            $table->string('stroke_diagram',100)->nullable();
            $table->string('constituent',100);
            $table->integer('stroke_count');
            $table->integer('lesson_no');
            $table->string('story',1000)->nullable();
            $table->string('on_yomi',50);
            $table->string('kun_yomi',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanjis');
    }
}
