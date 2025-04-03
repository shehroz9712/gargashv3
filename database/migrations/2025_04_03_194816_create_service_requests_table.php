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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_phone_number');
            $table->string('email')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('plate_no')->nullable();
            $table->string('service');
            $table->string('location')->nullable();
            $table->string('url')->nullable();
            $table->string('device_type')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
