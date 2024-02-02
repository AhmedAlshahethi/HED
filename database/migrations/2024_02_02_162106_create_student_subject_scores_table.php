<?php

use App\Enums\ScoreStatus;
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
        Schema::create('student_subject_scores', function (Blueprint $table) {
            $table->id();
            $table->float('score');
            $table->enum('general_grade', []);
            $table->enum('status', ScoreStatus::values());
            $table->foreignId('subject_id')->references('id')->on('subjects')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('student_id')->references('id')->on('students')->restrictOnDelete()->cascadeOnUpdate();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_subject_scores');
    }
};
