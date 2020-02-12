<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventurerAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventurer_abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('adventurer');
            $table->integer('ability_slot');
            $table->integer('level');
            $table->integer('ability');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adventurer_abilities');
    }
}
