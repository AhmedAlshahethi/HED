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
        Schema::create('research_paper_discussions', function (Blueprint $table) {
            $table->id();
            $table->string('internal_discussant');
            $table->string('external_discussant');
            $table->date('section_approvement_date')->nullable();
            $table->string('section_approvement_number')->nullable();
            $table->date('college_approvement_date')->nullable();
            $table->string('college_approvement_number')->nullable();
            $table->date('discussion_date')->nullable();
            $table->float('score')->nullable();
            $table->enum('general_rating', [])->nullable();
            $table->string('file_path')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('research_paper_id')->references('id')->on('research_papers')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_paper_discussions');
    }
};
