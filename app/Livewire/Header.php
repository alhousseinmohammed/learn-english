<?php

namespace App\Livewire;
use App\Models\Exercise;
use App\Models\Lesson;

use Livewire\Component;

class Header extends Component
{
    public $hearts;
    public $exercise_id;
    public $exercise;
    public $sum;

    public function mount(int $exercise_id) // Use mount method to initialize properties
    {
        $this->hearts = optional(auth()->user())->learner->current_hearts ?? 0; // Use optional to prevent errors
        $this->exercise_id = $exercise_id;
        $exercise = Exercise::find($exercise_id);
        $this->exercise = $exercise;
$this->sum = Exercise::where('lesson_id', $exercise->lesson_id)->max('order');


    }

    public function render()
    {
        return view('livewire.header');
    }
}
