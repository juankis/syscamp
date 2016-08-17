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

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');

            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')
                  ->references('id')->on('clubs')
                  ->onDelete('cascade');     

            $table->timestamps();             
        });

        DB::table('players')->insert(
            array(
                'id_kardex' => '0001',
                'second_name_p' => 'ojeda gomez',
                'second_name_m' => 'juan carlos',
                'user_id' => '5',
                'category_id' => '1',
                'club_id' => '1'  
            )
        );

        DB::table('players')->insert(
            array(
                'id_kardex' => '0002',
                'second_name_p' => 'javier',
                'second_name_m' => 'vasquez',
                'user_id' => '6',
                'category_id' => '1',
                'club_id' => '1'  
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
        Schema::drop('players');
    }
}
