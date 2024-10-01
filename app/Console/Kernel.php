<?php

namespace App\Console;

use App\Models\Learner;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:refill-hearts')->everyMinute(); // Ensure you're using the correct command name
        // $schedule->call(function () {
        //     $learner = Learner::find(1);
        //     $learner->current_hearts = 5;
        //     $learner->save();
        //      // Reset current streak (as per your logic)
        // })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }


}
