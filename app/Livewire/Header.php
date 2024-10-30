<?php

namespace App\Livewire;

use App\Models\Exercise;
use App\Models\Lesson;

use Livewire\Component;

class Header extends Component
{
    protected $listeners = ["Heartsupdated" => "updateHearts", 'progressed'];
    public $progress;
    public $hearts;
    public $exercise_id;
    public $exercise;
    public $sum;
    public $super;

    public function mount(int $exercise_id) // Use mount method to initialize properties
    {
        $this->hearts = optional(auth()->user())->learner->current_hearts ?? 0; // Use optional to prevent errors
        $this->exercise_id = $exercise_id;
        $exercise = Exercise::find($exercise_id);
        $this->exercise = $exercise;
        $this->sum = Exercise::where('lesson_id', $exercise->lesson_id)->max('order');
        $this->super = optional(auth()->user())->learner->super ?? false;
    }
    public function updateHearts()
    {
        $this->hearts = optional(auth()->user())->learner->current_hearts ?? 0; // Use optional to prevent errors
    }

    public function progressed($value)
    {
        $this->progress
            = ($value['order']) / $value['sum'];
    }
    public function render()
    {
        return view('livewire.header');
    }
}
