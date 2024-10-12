<?php

namespace App\Livewire;

use Livewire\Component;

class Exercise extends Component
{
    public $test = "Test message"; // Default message
    public $answer; // User's answer
    public function mount() {
        $this->answer = 'b';
    }
    public function updateAnswer()
    {
        // dd($value);
     // Debugging: stops execution and displays value
}

    public function render()
    {
        return view('livewire.exercise');
    }
}
