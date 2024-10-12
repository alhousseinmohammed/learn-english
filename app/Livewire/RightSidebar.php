<?php

namespace App\Livewire;

use Livewire\Component;

class RightSidebar extends Component
{
    public $super;
    public function mount() {
$this->super = optional(auth()->user())->learner->super ?? false;

    }
    public function render()
    {
        return view('livewire.right-sidebar');
    }
}
