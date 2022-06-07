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
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name_short');
            $table->string('product_name_long');
            $table->string('product_cart_images_name')->nullable()->default(null);
            $table->string('product_catalog_images_name')->nullable()->default(null);
            $table->enum('product_categories', ['keyboard','mouse','switches','monitor','other'])->default('other');
            $table->foreignId('product_brand_id')->references('id')->on('product_brand')->constrained();
            $table->string('product_description')->nullable()->default(null);
            $table->decimal('product_base_price', 8,2)->nullable()->default('0.00');
            $table->boolean('product_status')->default(1);
            $table->boolean('product_featured')->default(0);
            $table->string('product_stripe_id')->nullable()->default(null);
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
        Schema::dropIfExists('product');//Drop if exist
    }
};
