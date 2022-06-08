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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->references('id')->on('users')->constrained();
            $table->string('address_1')->nullable()->default(null);
            $table->string('address_2')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->enum('state', ['Johor','Kedah','Kelantan','Malacca','Negeri Sembilan','Pahang','Penang','Perak','Perlis','Sabah','Sarawak','Selangor','Terengganu','Kuala Lumpur','Labuan','Putrajaya'])->nullable()->default(null);
            $table->string('postal')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->dateTime('date')->useCurrent();;
            $table->decimal('total', 8,2)->nullable()->default('0.00');
            $table->enum('status', ['Preparing','Shipped','Delivered'])->nullable()->default('Preparing');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');//
    }
};
