<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryRestaurantPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_restaurant', function (Blueprint $table) {
            $table->primary(['category_id', 'restaurant_id']);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('restaurant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_restaurant');
    }
}
