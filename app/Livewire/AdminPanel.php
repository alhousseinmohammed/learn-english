<?php

namespace App\Livewire;

use Livewire\Component;

class AdminPanel extends Component
{
    protected $listeners = ['navigate' => 'navigate'];
    public $component;
    public function mount()
    {
        $this->component = "adminDashboard";
    }
    public function navigate()
    {
        $this->component = 'levels';
        $this->render();
    }
    public function render()
    {
        return view('livewire.admin-panel');
    }
}
