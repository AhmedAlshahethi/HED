<?php

namespace App\Providers;

use App\Enums\AcademicLevel;
use App\Models\Department;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    $departments = Department::all(['id', 'name']);
    $academicLevels = AcademicLevel::values();
    view()->share('departments', $departments);
    view()->share('academicLevels', $academicLevels);
  }
}
