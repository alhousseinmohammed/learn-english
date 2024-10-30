<?php

namespace App\Livewire;

use Livewire\Component;

class Assist extends Component
{
    protected $listeners = [
        'answeredWell' => 'green',
        'continued' => 'ungreen',
    ];
    public $correct = 'false';
    public $answered;
    public $exercise;
    public $answerNumber = 0;
    public function updated($propertyName)
    {
        if ($propertyName != 'answered') {
            dd($propertyName);
        }
    }
    public function updatedExercise(
        $value
    ) {
        dd($value);
    }
    public function mount($exercise)
    {
        $this->exercise = $exercise;
    }
    // public function mount($exercise) {
    //     $this->exercise = $exercise;
    // }
    public function updateAnswered()
    {
        $this->dispatch('answeredUpdated', $this->answered);
    }
    public function green()
    {
        $this->correct = true;
    }
    public function ungreen()
    {
        $this->correct = false;
    }
    public function render()
    {
        return view('livewire.assist');
    }
}
