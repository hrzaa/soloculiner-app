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
        Schema::create('restos', function (Blueprint $table) {
            $table->id();

            $table->string('resto_name');
            $table->foreignId('users_id');
            $table->foreignId('food_id');
            $table->integer('price');
            $table->string('address');
            $table->string('address_link');
            $table->string('slug');

            $table->timestamps();

            // $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restos');
    }
};
