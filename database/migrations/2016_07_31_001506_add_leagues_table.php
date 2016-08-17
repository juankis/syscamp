<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('leagues')->insert(
            array(
                'name' => 'Campeonato de temporada 2016 - Apertura'
            )   
        );

        DB::table('leagues')->insert(
            array(
                'name' => 'Campeonato de temporada 2015 - Cierre'
            )   
        );

        DB::table('leagues')->insert(
            array(
                'name' => 'Campeonato de temporada 2015 - Apertura'
            )   
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leagues');
    }
}
