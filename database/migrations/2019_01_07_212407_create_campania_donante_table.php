<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaniaDonanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campania_donante', function (Blueprint $table) {
            $table->integer('campania');
            $table->integer('donante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campania_donante', function (Blueprint $table) {
            $table->integer('campania_id');
            $table->integer('donante_id');
        });
    }
}
