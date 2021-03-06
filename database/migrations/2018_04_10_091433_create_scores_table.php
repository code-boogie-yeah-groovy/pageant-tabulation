<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('passcode_id')->unsigned();
            $table->integer('contestant_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('criteria_id')->unsigned()->nullable();
            $table->decimal('score');
            $table->timestamps();
        });

        Schema::table('scores', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('passcode_id')->references('id')->on('passcodes');
            $table->foreign('contestant_id')->references('id')->on('contestants');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('criteria_id')->references('id')->on('criterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
