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
        Schema::table('student_subject_scores', function (Blueprint $table) {
            $table->dropColumn('score');
            $table->float('class_mark')->after('id');
            $table->float('final_exam')->after('class_mark');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_subject_scores', function (Blueprint $table) {
            $table->float('score')->after('id');
            $table->dropColumn('class_mark');
            $table->dropColumn('final_exam');
        });
    }
};
