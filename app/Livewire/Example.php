<?php

namespace App\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $inputValue = '';

    public function render()
    {
        return view('livewire.example');
    }
}
