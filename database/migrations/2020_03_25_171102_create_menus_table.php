<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('restaurant_id');
            $table->string('name', 50);
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedDecimal('price', 8, 2);
            $table->boolean('available')->default(true);
            $table->timestamp('added_on', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
