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

            $table->foreignId('users_id');
            $table->foreignId('categories_id');
            $table->string('food_name');

            // table indo
            $table->longText('food_desc_id');
            $table->longText('food_history_id');

            // table eng
            $table->longText('food_desc_en');
            $table->longText('food_history_en');

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
