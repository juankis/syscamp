<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClubLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_league', function (Blueprint $table) {
            $table->increments('id')->unique();

            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')
                  ->references('id')->on('clubs')
                  ->onDelete('cascade');

            $table->integer('league_id')->unsigned();
            $table->foreign('league_id')
                  ->references('id')->on('leagues')
                  ->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')->on('categories')
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
        Schema::drop('club_league');
    }
}
