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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50)->nullable();
            $table->string('departure', 100)->nullable();
            $table->time('departure_time')->nullable();
            $table->string('arrival', 100)->nullable();
            $table->time('arrival_time')->nullable();
            $table->tinyInteger('carriages')->nullable();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
