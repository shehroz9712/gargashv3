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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->morphs('shareable');
            $table->string('heading')->unique();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('another_link')->nullable();
            $table->string('another_btn_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
