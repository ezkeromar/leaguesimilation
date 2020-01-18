<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('result_a');
            $table->integer('result_b');
            $table->boolean('a_out_home');
            $table->boolean('b_out_home');
            $table->bigInteger('team_a')->unsigned();
            $table->foreign('team_a')->references('id')->on('teams');
            $table->bigInteger('team_b')->unsigned();
            $table->foreign('team_b')->references('id')->on('teams');
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
        Schema::dropIfExists('matches_histories');
    }
}
