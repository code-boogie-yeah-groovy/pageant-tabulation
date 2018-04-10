<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasscodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('event_id')->unsigned();
            $table->string('judge_name');
            $table->boolean('usable')->default(true);
            $table->timestamps();
        });

        Schema::table('passcodes', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passcodes');
    }
}
