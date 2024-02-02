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
        Schema::create('final_results', function (Blueprint $table) {
            $table->id();
            $table->float('total_score');
            $table->float('total_precentage');
            $table->enum('status', ScoreStatus::values());
            $table->foreignId('student_id')->references('id')->on('students')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_results');
    }
};
