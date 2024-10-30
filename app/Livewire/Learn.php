<?php

namespace App\Livewire;

use App\Models\Lesson;
use App\Models\Theme;
use App\Models\User;
use Livewire\Component;

class Learn extends Component
{
    public $userId;
    public $lastLesson;
    public $lastIntheme;
    public $learner;
    public $themes;
    public function mount()
    {
        //
        // $lessons = Lesson::with('theme')->get();
        if (!auth()->user()) {
            return redirect()->route('login');
        }
        $lessons = Lesson::with('exercises')->get();
        $themes = Theme::with(['lessons.exercises'])->get();

        $learner = auth()->user()->learner;

        $lastOrder = auth()->user()->learner->progress()
            ->with('lesson') // Load the related lessons
            ->get() // Retrieve the progress records
            ->max('lesson.order'); //

        $lastTheme = auth()->user()->learner->progress()
            ->with('lesson')->with('lesson.theme') // Load the related lessons
            ->get() // Retrieve the progress records
            ->max('lesson.theme.order'); //


        if ($lastTheme) {
            $lastInTheme = Theme::where('order', $lastTheme)->first()->lessons->max('order');
        } else {
            $lastInTheme = null;
        }

        // if($lastOrder){
        //     $lastOrder = $lastOrder->lesson('order')->load('lesson',);
        // }else{
        //     $lastOrder = 0;
        // }
        $userId = User::find(1);
        // return view(view: 'learn')->with('userId', value: $userId)->with('themes', $themes)->with('lastLesson', $lastOrder)->with('lastTheme', $lastTheme)->with('lastInTheme', $lastInTheme)->with('learner', $learner);
        $this->userId = $userId;
        $this->lastLesson = $lastOrder;
        $this->lastIntheme = $lastInTheme;
        $this->learner = $learner;
        $this->themes = $themes;
    }
    public function render()
    {
        return view('livewire.learn');
    }
}
