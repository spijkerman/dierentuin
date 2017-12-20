<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Animals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('animal_type_id')->unsigned();
            $table->foreign('animal_type_id')->references('id')->on('animal_types');
            $table->integer('zoo_id')->unsigned();
            $table->foreign('zoo_id')->references('id')->on('zoos');
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
        //
    }
}
