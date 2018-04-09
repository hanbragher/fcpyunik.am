<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hy_name');
            $table->string('ru_name');
            $table->string('en_name');
            $table->string('birthday');

            $table->integer('position_id')->unsigned()->default(0);
            $table->foreign('position_id')->references('id')->on('positions');

            $table->integer('team_id')->unsigned()->default(0);
            $table->foreign('team_id')->references('id')->on('teams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
