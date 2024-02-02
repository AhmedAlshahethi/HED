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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->date('date');
            $table->string('file_path')->nullable();
            $table->foreignId('document_type_id')->references('id')->on('document_types')->restrictOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('documents');
    }
};
