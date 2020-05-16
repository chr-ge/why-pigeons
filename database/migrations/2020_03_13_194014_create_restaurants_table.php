<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique()->index();
            $table->string('slug', 50)->unique()->index();
            $table->string('email')->unique();
            $table->string('phone', 12)->unique();
            $table->unsignedInteger('category_id');
            $table->string('image')->default('uploads/default.jpeg');
            $table->boolean('active')->default(false);
            $table->unsignedDecimal('delivery_fee')->default(0.00);
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('category_id')->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
