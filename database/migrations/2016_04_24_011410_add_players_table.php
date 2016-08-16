<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_kardex');
            $table->string('name');
            $table->string('second_name_p');
            $table->string('second_name_m');
            $table->string('birthday');
            $table->string('place_of_birth');
            $table->string('ci');
            $table->string('nationality');
            $table->string('home');
            $table->string('email');
            $table->string('phone');
            $table->string('movil');
            $table->string('profession');
            $table->string('picture');
            

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')
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
        Schema::drop('players');
    }
}
