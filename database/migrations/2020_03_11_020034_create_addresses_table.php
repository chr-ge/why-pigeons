<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('address_id');;
            $table->unsignedBigInteger('user_id')->index();
            $table->string('description', 15)->default('delivery');
            $table->string('street_address', 30);
            $table->string('city', 20);
            $table->string('province', 20);
            $table->string('postal_code', 15);
            $table->string('country', 20);
            $table->timestamp('added_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
