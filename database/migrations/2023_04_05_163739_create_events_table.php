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
            $table->string('event_name');
            $table->foreignId('users_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->longText('event_desc_en');
            $table->longText('event_desc_id')->nullable();
            $table->longText('event_history')->nullable();
            $table->string('address');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('slug');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
