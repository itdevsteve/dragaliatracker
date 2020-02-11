<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name_en');
            $table->string('name_jp');
            $table->tinyInteger('rarity');
            $table->tinyInteger('tier');
            $table->tinyInteger('element')->nullable();
            $table->tinyInteger('weapon_type');
            $table->tinyInteger('category');
            $table->smallInteger('strength_min');
            $table->smallInteger('strength_max');
            $table->smallInteger('health_min');
            $table->smallInteger('health_max');
            $table->string('gamepediaLink')->nullable();
            $table->string('gamepressLink')->nullable();
            $table->tinyInteger('limited')->default(0);
            $table->integer('event')->nullable();
            $table->date('releaseDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}
