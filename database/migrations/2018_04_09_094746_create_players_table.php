<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('birthday');

            $table->integer('team_id')->unsigned()->default(0);
            $table->foreign('team_id')->references('id')->on('teams');

            $table->integer('status_id')->unsigned()->default(0);
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->integer('position_id')->unsigned()->default(0);
            $table->foreign('position_id')->references('id')->on('positions');

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
