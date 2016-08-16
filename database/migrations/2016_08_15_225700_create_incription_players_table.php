<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncriptionPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription_players', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')
                  ->references('id')->on('players')
                  ->onDelete('cascade');
            
            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')
                  ->references('id')->on('inscriptions')
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
        Schema::drop('inscription_players');
    }
}
