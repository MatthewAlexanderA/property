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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('category');
            $table->string('name');
            $table->string('location');
            $table->string('bath');
            $table->string('bed');
            $table->string('room');
            $table->string('area');
            $table->string('price');
            $table->string('side_image1')->nullable();
            $table->string('side_image2')->nullable();
            $table->string('side_image3')->nullable();
            $table->string('side_image4')->nullable();
            $table->string('content');
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
        Schema::dropIfExists('properties');
    }
};
