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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('property_title');
            $table->string('property_desc');
            $table->string('testimonial_title');
            $table->string('testimonial_desc');
            $table->string('blog_title');
            $table->string('blog_desc');
            $table->string('footer_title');
            $table->string('footer_desc');
            $table->string('footer_button');
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
        Schema::dropIfExists('titles');
    }
};
