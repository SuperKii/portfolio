<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('basic_component', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('home_name');
            $table->string('home_description');
            $table->string('home_image');
            $table->string('about_description');
            $table->string('about_skill');
            $table->string('about_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_component');
    }
};
