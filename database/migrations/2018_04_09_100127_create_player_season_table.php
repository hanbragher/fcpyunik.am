<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_season', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('player_id')->unsigned()->default(0);
            $table->foreign('player_id')->references('id')->on('players');

            $table->integer('season_id')->unsigned()->default(0);
            $table->foreign('season_id')->references('id')->on('seasons');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_season');
    }
}
