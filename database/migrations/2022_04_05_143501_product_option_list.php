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
        Schema::create('product_option_list', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('product_option_id')->references('id')->on('product_option')->constrained()->onDelete('cascade');
            $table->string('product_option_list_name');
            $table->decimal('product_option_list_additional_price', 8,2);
            $table->boolean('product_option_list_status')->default(1);
            $table->timestamps();
        });////
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_option_list');//
    }
};
