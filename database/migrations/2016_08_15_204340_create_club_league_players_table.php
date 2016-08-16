<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubLeaguePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_league_players', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')
                  ->references('id')->on('players')
                  ->onDelete('cascade');
            
            $table->integer('club_league_id')->unsigned();
            $table->foreign('club_league_id')
                  ->references('id')->on('club_league')
                  ->onDelete('cascade');

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
        Schema::drop('club_league_players');
    }
}
