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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('heading1');
            $table->string('heading2');
            $table->string('heading3');
            $table->string('paragraph1');
            $table->string('heading4');
            $table->string('paragraph2');
            $table->string('paragraph3');
            $table->string('paragraph4');
            $table->string('heading5');
            $table->string('button');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
