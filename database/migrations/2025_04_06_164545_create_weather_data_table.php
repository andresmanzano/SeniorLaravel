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
        Schema::create('weather_data', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->decimal('temperature', 5, 2);
            $table->string('weather_status');
            $table->decimal('wind_speed', 5, 2);
            $table->integer('humidity');
            $table->timestamp('local_time')->nullable();
            $table->timestamp('retrieved_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_data');
    }
};
