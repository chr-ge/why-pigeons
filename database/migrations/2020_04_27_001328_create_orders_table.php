<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('restaurant_id')->nullable();
            $table->unsignedInteger('driver_id')->nullable();
            $table->unsignedInteger('total_items_qty');
            $table->unsignedDecimal('billing_subtotal');
            $table->unsignedDecimal('billing_delivery');
            $table->unsignedDecimal('billing_tax');
            $table->unsignedDecimal('driver_tip');
            $table->unsignedDecimal('billing_total');
            $table->string('status');
            $table->string('stripe_id');
            $table->string('error')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')
                ->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('restaurant_id')->references('id')
                ->on('restaurants')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('driver_id')->references('id')
                ->on('drivers')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
