<?php

namespace App\Livewire;

use Livewire\Component;

class AdminSidebar extends Component
{
    public function navigate()
    {
        $this->dispatch('navigate');
    }
    public function render()
    {
        return view('livewire.admin-sidebar');
    }
}
