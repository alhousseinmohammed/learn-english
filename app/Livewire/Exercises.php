<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Exercise;
use App\Models\Lesson;

class Exercises extends Component
{
    public $exercises;
    public $lesson_name;
    public $options_lang;
    public $lang;
    public $newOption;

    public function mount($lesson_id = null)
    {
        $lesson_id ? $this->lesson_name = Lesson::find($lesson_id)->name : Null;
        $this->exercises = $lesson_id ? Exercise::orderBy('order', 'asc')->where('lesson_id', $lesson_id)->get() : Lesson::orderBy('order', 'asc')->get();
        $this->exercises = Exercise::with(relations: 'lesson')->orderBy('order')->get();
        // $this->options_lang = $this->exercise->getTranslation('options', 'en');
        $this->lang = 'en';
    }

    public function updateQuestion($exerciseId, $newValue)
    {
        $exercise = Exercise::find($exerciseId);
        $exercise->question = $newValue;
        $exercise->save();
    }
    public function updateOption($exerciseId, $index, $newValue)
    {
        $exercise = Exercise::find($exerciseId);
        $options = json_decode($exercise->options, true);
        $options[$index] = $newValue;
        $exercise->options = json_encode($options);
        $exercise->save();
    }

    public function updateAnswer($exerciseId, $newAnswer)
    {
        $exercise = Exercise::find($exerciseId);
        $exercise->answer = $newAnswer;
        $exercise->save();
    }


    public function updateOrder($exerciseId, $newOrder)
    {
        $exercise = Exercise::find($exerciseId);
        $exercise->order = $newOrder;
        $exercise->save();
    }

    public function updateLang()
    {
        // $this->options_lang = $this->exercise->getTranslation('options', 'ar');
        $this->lang = 'ar';
    }
    public function addTranslation()
    {
        dd($this->newOption);
    }
    public function render()
    {
        return view('livewire.exercises');
    }
}
