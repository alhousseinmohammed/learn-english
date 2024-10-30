<?php

namespace App\Livewire;

use App\Models\Exercise;
use App\Models\League;
use App\Models\Status;
use App\Models\Learner;
use App\Models\Lesson;
use App\Models\Theme;
use App\Models\Level;
use App\Models\Progress;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $users_number;
    public $levels_number;
    public $themes_number;
    public $lessons_number;
    public $exercises_number;
    public $supers_number;
    public $actives_number;
    public $leagues_number;
    public $statuses_number;
    public function mount()
    {
        $this->users_number = Learner::count('*');
        $this->actives_number = Progress::whereDate('created_at', today())->select('lesson_id')->distinct()->count();
        $this->supers_number = Learner::where('super', true)->count('*');
        $this->levels_number = Level::count('*');
        $this->themes_number = Theme::count('order');
        $this->lessons_number = Lesson::count('order');
        $this->exercises_number = Exercise::count('order');
        $this->leagues_number = League::count('image');
        $this->statuses_number = Status::count('image');
        $progress = Progress::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))->groupBy('date')->get();
    }
    public function render()
    {
        return view('livewire.admin-dashboard');
    }
}
