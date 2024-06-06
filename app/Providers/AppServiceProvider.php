<?php

namespace App\Providers;

use App\Enums\AcademicLevel;
use App\Models\Department;
use Illuminate\Support\ServiceProvider;
use App\Listeners\SendPaymentCompletionNotification;
use App\Events\StudentPaymentCompleted;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  protected $listen = [
    // ... other listeners you might have ...
    StudentPaymentCompleted::class => [
        SendPaymentCompletionNotification::class,
    ],
];
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
