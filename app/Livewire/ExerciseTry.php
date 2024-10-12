<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LearnerController;

class ExerciseTry extends Component
{
    public $lesson;
    public $listeners = ["answeredUpdated" => "updateAnswered"];
    public $answered;
    public $correct = false;
    public $wrong = false;
    public $exercise;
    public function mount($lesson) {
        $this->lesson = $lesson;
        $this->exercise = $this->lesson->exercises()->orderBy('order')->first();
    }
    // public function mount($exercise) {
    //     $this->exercise = $exercise;
    // }
    public function updateExercise() {
        // $this->exercise = Exercise::find($this->exercise->id + 1);
        // $this->exercise = Exercise::where('order', $this->exercise->order +1);
        $old = $this->exercise;
        $this->exercise = $this->lesson->exercises()->where('exercises.order', $this->exercise->order+1)->first();
        if (!$this->exercise) {
                return redirect()->action('App\Http\Controllers\ExerciseController@showNext', parameters: $old->id);

        }
        $this->render();
    }
    public function updateAnswered($answered) {
        $this->answered = $answered;
        // dd($this->answered);
    }
    public function check() {
        if($this->answered == $this->exercise->answer) {
            $this->updateExercise();
            // dd($this->exercise->id);

            // $controller = new ExerciseController;
            // $controller->showNext($this->exercise->id);
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
