<?php

namespace App\Livewire;

use App\Models\Learner;
use App\Models\User;
use Livewire\Component;

class FindFriends extends Component
{
    public $users;
    public function mount()
    {
        $query = User::with('learner')->where('role', 'learner');

        // Apply status filter if selected



        // Apply proficiency filter
        // if ($this->proficiency) {
        //     $query->whereHas('learner', function ($q) {
        //         $q->where('proficiency_level', $this->proficiency);
        //     });
        // }

        $this->users = $query->get();
    }
    public function render()
    {
        return view('livewire.find-friends');
    }
}
