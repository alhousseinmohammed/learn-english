<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LearnerController;

class ExerciseTry extends Component
{
    public $answered;
    public $exercise;
    public function mount() {
        $this->exercise = Exercise::find(1);
    }
    // public function mount($exercise) {
    //     $this->exercise = $exercise;
    // }
    public function updateAnswered() {
    }
    public function check() {
        if($this->answered == $this->exercise->answer) {
            $controller = new ExerciseController;
            $controller->showNext($this->exercise->id);
        } else {
            $controller = new LearnerController;
            $controller->show($this->exercise->id);
            $this->dispatch('Heartsupdated');
        }
    }
    public function pronounce () {
    }
    public function render()
    {
        return view('livewire.exercise-try');
    }
}
