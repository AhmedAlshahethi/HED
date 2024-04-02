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
        Schema::create('schedule_entries', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('start_time');
            $table->string('class_room')->nullable();
            $table->foreignId('schedule_id')->references('id')->on('schedules')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('subject_id')->references('id')->on('subjects')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('instructor_id')->references('id')->on('instructors')->restrictOnDelete()->cascadeOnUpdate();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_entries');
    }
};
