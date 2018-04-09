<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerNationalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_nationality', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('player_id')->unsigned()->default(0);
            $table->foreign('player_id')->references('id')->on('players');

            $table->integer('nationality_id')->unsigned()->default(0);
            $table->foreign('nationality_id')->references('id')->on('nationalities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_nationality');
    }
}
