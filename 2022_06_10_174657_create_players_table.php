<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id('player_id');
            $table->foreignId('category_id');
            $table->foreignId('comment_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('primary_position');
            $table->string('optional_position');
            $table->string('dominante_hand');
            $table->float('height');
            $table->float('weight');
            $table->date('day_of_birth');
            $table->integer('years');
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
        Schema::dropIfExists('players');
    }
}
