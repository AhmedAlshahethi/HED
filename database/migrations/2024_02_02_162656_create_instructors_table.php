<?php

use App\Enums\AcademicLevel;
use App\Enums\Gender;
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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable;

            $table->enum('academic_level', AcademicLevel::values());
            $table->string('email')->nullable()->unique();
            $table->string('description')->nullable();
            $table->enum('gender', Gender::values());
            $table->string('phone_number')->nullable();
            $table->foreignId('department_id')->references('id')->on('departments')->restrictOnDelete()->cascadeOnUpdate();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
