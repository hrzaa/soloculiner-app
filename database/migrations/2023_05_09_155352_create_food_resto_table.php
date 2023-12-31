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
        Schema::create('food_resto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_id');
            $table->foreignId('resto_id');

            // $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
            // $table->foreign('resto_id')->references('id')->on('restos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_resto');
    }
};
