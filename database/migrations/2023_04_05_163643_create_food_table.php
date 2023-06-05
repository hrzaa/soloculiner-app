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
        Schema::create('food', function (Blueprint $table) {

            $table->id();
            $table->string('food_name');
            $table->foreignId('users_id');
            $table->longText('food_history_en');
            $table->longText('food_desc_en');
            $table->longText('food_history_id')->nullable();
            $table->longText('food_desc_id')->nullable();
            $table->foreignId('categories_id');
            $table->string('slug');

            $table->softDeletes();
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
        Schema::dropIfExists('food');
    }
};
