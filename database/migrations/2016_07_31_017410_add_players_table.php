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
                'name' => 'Juan Carlos',
                'second_name_p' => 'ojeda gomez',
                'second_name_m' => 'juan carlos',
                'user_id' => '5',
                'category_id' => '1',
                'club_id' => '1',
                'email' => 'juanki.ijcog@gmail.com',
                'ci' => '12345345',
                'phone' => '45454533',
                'movil' => '794859845',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")  
            )
        );

        DB::table('players')->insert(
            array(
                'id_kardex' => '0002',
                'name' => 'Javier',
                'second_name_p' => 'Vasquez',
                'second_name_m' => 'Cruz',
                'user_id' => '6',
                'category_id' => '2',
                'club_id' => '2',
                'email' => 'javier@gmail.com',
                'ci' => '4756755345',
                'phone' => '43453455',
                'movil' => '73453455',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")  
            )
        );

        DB::table('players')->insert(
            array(
                'id_kardex' => '0003',
                'name' => 'Ruber',
                'second_name_p' => 'matins',
                'second_name_m' => 'ojeda',
                'user_id' => '5',
                'category_id' => '1',
                'club_id' => '1',
                'email' => 'river@gmail.com',
                'ci' => '65465345',
                'phone' => '4234234243',
                'movil' => '7546456456',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")  
            )
        );

        DB::table('players')->insert(
            array(
                'id_kardex' => '0004',
                'name' => 'Gabriel',
                'second_name_p' => 'Vasquez',
                'second_name_m' => 'Cruz',
                'user_id' => '6',
                'category_id' => '2',
                'club_id' => '2',
                'email' => 'j_carlos1111@hotmail.com',
                'ci' => '12345345',
                'phone' => '45234234',
                'movil' => '745345345',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")  
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
