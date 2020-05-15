<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('restaurant_id');
            $table->unsignedTinyInteger('day');
            $table->time('open_time', 0)->nullable();
            $table->time('close_time', 0)->nullable();

            $table->unique(['restaurant_id', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_hours');
    }
}
