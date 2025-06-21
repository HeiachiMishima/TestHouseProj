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
        Schema::create('news_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('date');
            $table->string('heading');
            $table->string('paragraph');
            $table->string('button');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_cards');
    }
};
