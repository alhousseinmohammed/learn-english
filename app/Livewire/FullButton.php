<?php

namespace App\Livewire;

use App\Http\Controllers\LearnerController;
use Livewire\Component;

class FullButton extends Component
{
    public function payGems () {
        $learnerController = new LearnerController;
        $learnerController->payGems(300);
    }

    public function fillHearts () {
        $learner = auth()->user()->learner;
        $learner->refillHearts();
    }

    public function payFill () {
        $this->payGems();
        $this->fillHearts();
    }
    public function render()
    {
        return view('livewire.full-button');
    }
}