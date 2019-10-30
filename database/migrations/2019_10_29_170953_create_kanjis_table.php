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
            $table->integer('jlpt_id')->nullable();
            $table->integer('jouyou_id')->nullable();
            $table->string('keyword',30);
            $table->string('kanji',5);
            $table->string('stroke_diagram',100)->nullable();
            $table->string('constituent',1000)->nullable();
            $table->integer('stroke_count')->nullable();
            $table->integer('lesson_no')->nullable();
            $table->string('story',1000)->nullable();
            $table->string('on_yomi',100)->nullable();
            $table->string('kun_yomi',100)->nullable();
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
        Schema::dropIfExists('kanjis');
    }
}
