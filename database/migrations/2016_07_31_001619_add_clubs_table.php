<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('id_club');
            $table->string('name');
            $table->string('color_official');
            $table->string('color_anternative');
            $table->string('fijo');
            $table->string('movil');
            $table->string('facebook');
            $table->string('dt_name');
            $table->string('dt_second_name');
            $table->string('dt_movil');
            $table->string('president');
            $table->string('vice_president');
            $table->string('general_secretary');
            $table->string('delegate_holder');
            $table->timestamps();
            
        });

        DB::table('clubs')->insert(
            array(
                'id' => '1',
                'name' => 'Wilsterman',
                'id_club' => '010000'
            )
        );

        DB::table('clubs')->insert(
            array(
                'id' => '2',
                'name' => 'San Jose',
                'id_club' => '020000'
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
        Schema::drop('clubs');
    }
}
