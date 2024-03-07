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
            $table->id();
            $table->string('kosa_kata',50);
            $table->string('arti',50);
            $table->text('detail');
            $table->text('ucapan_talawi');
            $table->text('ucapan_indonesia');
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
        Schema::dropIfExists('kosa_katas');
    }
}
