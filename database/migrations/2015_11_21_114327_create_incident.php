<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncident extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('incident', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_type');
            $table->string('commentaire')->nullable();
            $table->dateTime('date');
            $table->string('lat');
            $table->string('lng');
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
        Schema::drop('incident');
    }
}
