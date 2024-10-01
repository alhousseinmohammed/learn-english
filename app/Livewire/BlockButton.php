<?php

namespace App\Livewire;

use Livewire\Component;

class BlockButton extends Component
{
    public $id;
    public $optionValue;
    public $answerValue;
    public function mount($id) {
        $this->id = $id;
    }
    public function updateOptinValue() {

        $this->answerValue = $this->optionValue;
    }
    public function render()
    {
        return view('livewire.block-button');
    }
}
