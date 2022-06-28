<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_data', function (Blueprint $table) {
            $table->id('data_id');
            $table->foreignId('player_id');
            $table->date('day_of_registration');
            $table->float('mother_height');
            $table->float('father_height');
            $table->string('oib')->unique();
            $table->text('contact_number');
            $table->string('first_sport');
            $table->string('school');
            $table->text('adress');
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
        Schema::dropIfExists('player_data');
    }
}
