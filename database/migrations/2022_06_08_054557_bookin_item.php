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
        Schema::create('booking_item', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('booking_id')->references('id')->on('booking')->constrained();
            $table->foreignId('product_id')->references('product_id')->on('product')->constrained();
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
