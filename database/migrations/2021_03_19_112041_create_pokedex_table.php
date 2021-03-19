<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokedexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokedex', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name');
            $table->string('type1');
            $table->string('type2');
            $table->integer('HP');
            $table->integer('attack');
            $table->integer('defence');
            $table->integer('sp_attack');
            $table->integer('sp_defence');
            $table->integer('speed');
            $table->integer('generation');
            $table->tinyInteger('legendary');
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
        Schema::dropIfExists('pokedex');
    }
}
