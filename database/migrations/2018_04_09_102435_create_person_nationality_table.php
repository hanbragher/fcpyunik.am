<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonNationalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_nationality', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('person_id')->unsigned()->default(0);
            $table->foreign('person_id')->references('id')->on('persons');

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
        Schema::dropIfExists('person_nationality');
    }
}
