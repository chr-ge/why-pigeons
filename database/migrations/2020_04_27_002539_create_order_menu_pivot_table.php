<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMenuPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->unsignedInteger('quantity');
            $table->string('special')->nullable();;
            $table->timestamps();

            $table->foreign('order_id')->references('id')
                ->on('orders')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('menu_id')->references('id')
                ->on('menus')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_menu');
    }
}
