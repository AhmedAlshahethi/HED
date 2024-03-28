<?php

use App\Enums\AcademicLevel;
use App\Enums\BloodType;
use App\Enums\GeneralGrade;
use App\Enums\HighSchoolType;
use App\Enums\IdentityType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Gender;


return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('students', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->enum('gender', Gender::values());
      $table->string('city');
      $table->string('district');
      $table->date('birthdate');
      $table->string('birth_place');
      $table->enum('Identity_type', IdentityType::values());
      $table->string('identity_number');
      $table->string('nationality');
      $table->string('nationality_country');
      $table->enum('blood_type', BloodType::values());
      $table->string('address');
      $table->string('phone_number');
      $table->string('email')->nullable();
      $table->string('high_school_name');
      $table->string('high_school_city');
      $table->string('high_school_district');
      $table->enum('high_school_type', HighSchoolType::values());
      $table->year('high_school_graduation_year');
      $table->float('high_school_total_score');
      $table->float('high_school_max_score');
      $table->float('high_school_total_percentage');
      $table->float('high_school_exam_id');
      $table->string('english_name');
      $table->string('english_birth_place');
      $table->string('english_address');
      $table->string('notes');
      $table->string('last_degree');
      $table->string('university');
      $table->string('college');
      $table->string('college_department');
      $table->string('major_name'); 
      $table->enum('general_grade', GeneralGrade::values());
      $table->string('total_percentage');
      $table->string('graduation_year');
      $table->enum('registration_type', AcademicLevel::values());
      $table->foreignId('department_id')->references('id')->on('departments')->restrictOnDelete()->cascadeOnUpdate();
      $table->float('fees');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('students');
  }
};
