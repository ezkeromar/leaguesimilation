<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('result_a')->nullable();
            $table->integer('result_b')->nullable();
            $table->integer('week');
            $table->boolean('a_out_home');
            $table->boolean('b_out_home');
            $table->boolean('champs');
            $table->boolean('qualifs');
            $table->bigInteger('team_a')->unsigned()->nullable();
            $table->foreign('team_a')->references('id')->on('teams');
            $table->bigInteger('team_b')->unsigned()->nullable();
            $table->foreign('team_b')->references('id')->on('teams');
            $table->bigInteger('league_id')->unsigned();
            $table->foreign('league_id')->references('id')->on('leagues');
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
        Schema::dropIfExists('matches');
    }
}
