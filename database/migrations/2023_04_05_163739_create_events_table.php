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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id');
            $table->string('event_name');

            // table indo
            $table->longText('event_desc_id');
            
            // table eng
            $table->longText('event_desc_en');

            $table->date('date_start');
            $table->date('date_end');
            $table->string('address');
            $table->string('address_link');

            $table->string('slug');

            $table->softDeletes();
            $table->timestamps();

            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
