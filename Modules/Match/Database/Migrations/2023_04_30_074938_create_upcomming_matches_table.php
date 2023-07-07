<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcomming_matches', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date');
            $table->string('time')->nullable();
            $table->string('stadium')->nullable();
            $table->string('team1');
            $table->string('image1');
            $table->string('team2');
            $table->string('image2');
            $table->string('status')->default('on');
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
        Schema::dropIfExists('upcomming_matches');
    }
};
