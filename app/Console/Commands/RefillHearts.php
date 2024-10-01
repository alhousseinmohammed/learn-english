<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Learner;

class RefillHearts extends Command
{
    protected $signature = 'app:refill-hearts';
    protected $description = 'Refill hearts for all learners';

    public function handle()
    {
        $learners = Learner::all();
        foreach ($learners as $learner) {
            $learner->refillHearts(); // Call the method directly on the learner instance
        }

        $this->info('Hearts refilled for all learners.');
    }
}
