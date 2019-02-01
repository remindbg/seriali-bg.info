<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('secondname')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('views')->default(1);
            $table->boolean('isactive')->default(0);
            $table->year('releaseyear')->nullable();
            $table->string('currentSeason')->nullable();
            $table->unsignedInteger('uniqueid')->nullable();
            //relations
            $table->unsignedInteger('stelevision_id')->nullable();
            $table->unsignedInteger('scountry_id')->nullable();
            $table->unsignedInteger('scategory_id')->nullable();
// todos: implement favorites later
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
        Schema::dropIfExists('series');
    }
}
