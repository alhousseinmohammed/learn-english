<?php

namespace App\Livewire;

use App\Models\Theme;
use Livewire\Component;

class Screen extends Component
{
    public $viewedTheme_id;
    public $viewedLesson_id;
    public $viewLessons;
    protected $listeners = ["theme-selected" => "viewTheme", "lesson-selected" => "viewLesson"];
        public function viewTheme($theme_id) {
        $this->viewedTheme_id = $theme_id;
    }
    public function viewLesson($lesson_id) {
        $this->viewedLesson_id = $lesson_id;
    }
    public function render()
    {
        return view('livewire.screen');
    }
}
