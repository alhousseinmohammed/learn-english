<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $selected;
    public function mount($selected) {
        $this->selected = $selected;
    }
    public function render()
    {
        return view('livewire.sidebar');
    }
}
