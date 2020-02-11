<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name_en');
            $table->string('name_jp');
            $table->tinyInteger('type');
            $table->tinyInteger('element')->nullable();
            $table->text('description_en');
            $table->text('description_jp');
            $table->tinyInteger('stat_1');
            $table->tinyInteger('stat_2');
            $table->integer("might");
            $table->integer("value");
            $table->integer("sp_cost")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
