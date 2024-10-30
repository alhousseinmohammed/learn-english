<?php

namespace App\Livewire;

use App\Models\Lesson;
use App\Models\Theme;
use Livewire\Component;

class Lessons extends Component
{
    public $lessons;
    public $themes;
    public $theme_name;
    public $title;
    public $titleSearch = '';
    public $themeIdSearch = 'All';
    public $descriptionSearch = '';
    public $theme_id;
    public $description;
    public function mount($theme_id = null)
    {
        $theme_id ? $this->theme_name = Theme::find($theme_id)->name : Null;
        $this->lessons = $theme_id ? Lesson::orderBy('order', 'asc')->where('theme_id', $theme_id)->get() : Lesson::orderBy('order', 'asc')->get();
        $this->themes = Theme::all();
    }
    public function search()
    {
        // Start with the Lesson query
        $query = Lesson::query();

        // Apply title filter if it is not empty
        if (!empty($this->titleSearch)) {
            $query->where('title', 'like', '%' . $this->titleSearch . '%');
        }

        if (!empty($this->descriptionSearch)) {
            $query->where('content', 'like', '%' . $this->descriptionSearch . '%');
        }

        // Apply theme filter if not "All"
        if ($this->themeIdSearch != "All") {
            $query->where('theme_id', $this->themeIdSearch);
        }

        // Execute the query and store the results
        $this->lessons = $query->get();
    }

    public function store()
    {
        $theme = Theme::with('lessons')->find($this->theme_id);
        $lastOrder = $theme->lessons ? $theme->lessons->max('order') : 0;

        //
        $lesson = new Lesson();
        $lesson->content = $this->description;
        $lesson->theme_id = $this->theme_id;
        $lesson->admin_id = 1;
        $lesson->title = $this->title;
        $lesson->order = $lastOrder + 1;
        $lesson->save();
        $this->reset(['title', 'description']);  // Better than manually setting to empty strings
        $this->mount();
    }
    public function updateLessonName($lessons_id, $value)
    {
        $lesson = Lesson::find($lessons_id);
        $lesson->title = $value;
        $lesson->save();
    }
    public function updateLessonContent($lesson_id, $value)
    {
        $lesson = Lesson::find($lesson_id);
        if ($lesson) {
            $lesson->content = $value;
            $lesson->save();
        }
    }

    public function updateLessonOrder($lesson_id, $value)
    {
        $lesson = Lesson::find($lesson_id);
        if ($lesson && is_numeric($value) && $value > 0) {
            $lesson->order = (int) $value;
            $lesson->save();
            $this->lessons = Lesson::orderBy('order', 'asc')->get();  // Re-fetch the sorted list
        }
    }
    public function delete($id)
    {
        Lesson::destroy($id);
        $this->mount();    // Refresh levels list
    }

    public function render()
    {
        return view('livewire.lessons');
    }
}
