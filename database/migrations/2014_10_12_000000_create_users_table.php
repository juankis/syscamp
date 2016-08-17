<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['member', 'admin'])->default('member');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'id' => '1',
                'name' => 'juan carlos ojeda gomez',
                'email' => 'juanki.ijcog@gmail.com',
                'password' => bcrypt('123456'),
                'type' => 'admin' 
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '5',
                'name' => 'juanki',
                'email' => 'j_carlos1111@hotmail.com',
                'password' => bcrypt('123456'),
                'type' => 'member' 
            )
        );

        DB::table('users')->insert(
            array(
                'id' => '6',
                'name' => 'javier',
                'email' => 'javier@gmail.com',
                'password' => bcrypt('123456'),
                'type' => 'member' 
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
        Schema::drop('users');
    }


}
