<?php

namespace App\Livewire;

use App\Models\League;
use App\Models\Learner;
use Livewire\Component;

class Leaderboard extends Component
{
    public $learners;
    public $leagues;
    public function mount()
    {
        $this->learners = Learner::orderBy('experience_points', 'desc')->get();
        $this->leagues = League::all();
    }
    public function render()
    {
        return view('livewire.leaderboard');
    }
}
