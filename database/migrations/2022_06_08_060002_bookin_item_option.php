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
        Schema::create('booking_item_option', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('booking_item_id')->references('id')->on('booking_item')->constrained();
            $table->foreignId('option_id')->references('id')->on('product_option_list')->constrained();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_item');//
    }
};
