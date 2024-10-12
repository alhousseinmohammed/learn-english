<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;


class Select extends Component
{
    public $answered;
    public $exercise;
    public $answerNumber = 0;
    public function updated($propertyName) {
        if ($propertyName != 'answered') {
        dd($propertyName);

        }

    }
            public function updatedExercise($value
    ) {
        dd($value);}
    public function mount($exercise) {
        $this->exercise = $exercise;
    }
    // public function mount($exercise) {
    //     $this->exercise = $exercise;
    // }
    public function updateAnswered() {
        $this->dispatch('answeredUpdated', $this->answered);
    }
    public function render()
    {
        return view('livewire.select');
    }
}
