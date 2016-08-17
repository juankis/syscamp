<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('categories')->insert(
            array(
                'id' => '1',
                'name' => 'categoria A'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '2',
                'name' => 'categoria B'
            )
        );

        DB::table('categories')->insert(
            array(
                'id' => '3',
                'name' => 'categoria C'
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
        Schema::drop('categories');
    }
}
