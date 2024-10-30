<?php

namespace App\Livewire;

use Livewire\Component;

class RightSidebar extends Component
{
    protected $listeners = ["heartsFilled" => "fillHearts"];
    public $super;
    public $gems;
    public $hearts;
    public $learner;
    public function mount()
    {
        $this->learner = auth()->user()->learner;
        if (!$this->learner) {
            abort(403, 'Learner not found.');
        }
        $this->learner->load('following', 'followers');

        $this->super = optional(auth()->user())->learner->super ?? false;
        $this->gems = auth()->user()->learner->current_gems;
        $this->hearts = auth()->user()->learner->current_hearts;
    }

    public function fillHearts()
    {
        $this->gems = auth()->user()->learner->current_gems;
        $this->hearts = auth()->user()->learner->current_hearts;
    }
    public function render()
    {
        return view('livewire.right-sidebar');
    }
}
