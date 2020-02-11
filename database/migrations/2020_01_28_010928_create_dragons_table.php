<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDragonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dragons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name_en');
            $table->string('name_jp');
            $table->tinyInteger('element');
            $table->tinyInteger('rarity_min');
            $table->tinyInteger('rarity_max');
            $table->smallInteger('strength_min');
            $table->smallInteger('strength_max');
            $table->smallInteger('health_min');
            $table->smallInteger('health_max');
            $table->smallInteger('might_min');
            $table->smallInteger('might_max');
            $table->smallInteger('favGift');
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
        Schema::dropIfExists('dragons');
    }
}
