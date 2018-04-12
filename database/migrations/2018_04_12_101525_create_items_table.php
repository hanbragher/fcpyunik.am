<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('hy_title')->nullable();
            $table->string('ru_title')->nullable();
            $table->string('en_title')->nullable();

            $table->string('hy_seoTitle')->nullable();
            $table->string('ru_seoTitle')->nullable();
            $table->string('en_seoTitle')->nullable();

            $table->text('hy_content')->nullable();
            $table->text('ru_content')->nullable();
            $table->text('en_content')->nullable();

            $table->text('hy_metaDescription')->nullable();
            $table->text('ru_metaDescription')->nullable();
            $table->text('en_metaDescription')->nullable();

            $table->string('hy_keyWords')->nullable();
            $table->string('ru_keyWords')->nullable();
            $table->string('en_keyWords')->nullable();

            $table->text('future_images')->nullable();
            $table->string('home_slider')->nullable();
            $table->string('slider', '5')->default('off');

            $table->integer('format_id')->unsigned()->default(0);
            $table->foreign('format_id')->references('id')->on('formats');

            $table->string('date')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
