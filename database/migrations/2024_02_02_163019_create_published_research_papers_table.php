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
        Schema::create('published_research_papers', function (Blueprint $table) {
            $table->id();
            $table->string('journal_name');
            $table->string('link');
            $table->text('notes')->nullable();
            $table->foreignId('reasearch_paper_id')->references('id')->on('research_papers')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published_research_papers');
    }
};
