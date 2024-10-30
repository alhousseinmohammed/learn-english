<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LearnerController;

class ExerciseTry extends Component
{
    public $hearts;
    public $lesson;
    public $listeners = ["answeredUpdated" => "updateAnswered"];
    public $answered;
    public $correct = false;
    public $wrong = false;
    public $exercise;
    public function mount($lesson)
    {
        $this->hearts = auth()->user()->learner->current_hearts;
        $this->lesson = $lesson;
        $this->exercise = $this->lesson->exercises()->orderBy('order')->first();
    }

    public function updateAnswered($answered)
    {
        $this->answered = $answered;
        // dd($this->answered);
    }
    public function updateHearts()
    {
        $this->hearts = auth()->user()->learner->current_hearts;
    }
    public function check()
    {
        if ($this->answered == $this->exercise->answer) {
            $this->correct = true;
            $this->dispatch('answeredWell');
            // $this->dispatch('play-sound', ['sound' => 'correct']);
        } else {
            $this->wrong = true;
            // $this->dispatch('play-sound', ['sound' => 'incorrect']);
            // $this->dispatch('play-sound', ['sound' => 'incorrect']);
            $controller = new LearnerController;
            $controller->show($this->exercise->id);
            $this->dispatch('Heartsupdated');
            $this->hearts = auth()->user()->learner->current_hearts;
        }
        $this->dispatch('progressed', ['sum' => $this->lesson->exercises->count('order'), 'order' => $this->exercise->order]);
    }
    public function skip()
    {
        $this->wrong = true;
        $controller = new LearnerController;
        $controller->show($this->exercise->id);
        $this->dispatch('Heartsupdated');
    }
    public function continue()
    {
        $this->correct = $this->wrong = false;
        $this->dispatch('continued');
        $old = $this->exercise;
        $this->exercise = $this->lesson->exercises()->where('exercises.order', $this->exercise->order + 1)->first();
        if (!$this->exercise) {
            return redirect()->action('App\Http\Controllers\ExerciseController@showNext', parameters: $old->id);
        }
        $this->render();
    }
    public function pronounce() {}
    public function render()
    {
        return view('livewire.exercise-try');
    }
}
