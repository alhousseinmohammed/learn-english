<?php

namespace App\Console\Commands;

use App\Models\Learner;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ResetStreaks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-streaks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
            $yesterday = Carbon::now()->subDay()->startOfDay();
    $today = Carbon::now()->startOfDay();

    // Get all learners
    $learners = Learner::all();

    foreach ($learners as $learner) {
        // Check if the learner made any progress yesterday
        $progressYesterday = $learner->progress()
    ->whereBetween('created_at', [$yesterday, $today])
    ->exists();

        // If no progress yesterday, reset the streak
        if (!$progressYesterday) {
            $learner->current_streak = 0;
            $learner->save();
        }
    }
    }
}
