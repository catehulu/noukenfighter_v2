<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosaKatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosa_katas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('jp_vocab',100);
            $table->string('eng_vocab',100);
            $table->string('contoh_kalimat',300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosa_katas');
    }
}
