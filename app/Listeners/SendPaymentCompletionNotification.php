<?php

namespace App\Listeners;

use App\Events\StudentPaymentCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SendPaymentCompletionNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StudentPaymentCompleted  $event
     * @return void
     */
    public function handle(StudentPaymentCompleted $event)
    {
        $student = $event->student;
        $studentId = $student->id;

        // Calculate total student payments
        $totalPayments = DB::table('student_payments')
            ->where('student_id', $studentId)
            ->sum('payment');

        // Retrieve student fees from Student model
        $studentFees = $student->fees;

        if ($totalPayments >= $studentFees) {
            // Payment completed
            Session::flash('payment_completed', 'Payment completed for student ' . $student->name . '!');
        } else {
            // Payment not completed (optional: flash a message)
            // Session::flash('payment_incomplete', 'Payment not yet completed for student ' . $student->name . '.');
        }
    }
}