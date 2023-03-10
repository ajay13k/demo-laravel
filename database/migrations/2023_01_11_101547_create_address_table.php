<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('billing_address1');
            $table->string('billing_address2');
            $table->string('billing_country');
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->string('billing_phone');
            $table->string('shipping_address1');
            $table->string('shipping_address2');
            $table->string('shipping_country');
            $table->string('shipping_state');
            $table->string('shipping_zip');
            $table->string('shipping_phone');
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
        Schema::dropIfExists('address');
    }
};
