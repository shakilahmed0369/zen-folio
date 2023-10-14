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
        Schema::create('love_to_dos', function (Blueprint $table) {
            $table->id();
            $table->string('image_one')->nullable();
            $table->string('title_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('title_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('title_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('title_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('love_to_dos');
    }
};
