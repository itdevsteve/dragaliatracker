<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDragonAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dragon_abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
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
        Schema::dropIfExists('dragon_abilities');
    }
}
