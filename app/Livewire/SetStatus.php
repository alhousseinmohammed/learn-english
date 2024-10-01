<?php

namespace App\Livewire;

use Livewire\Component;

class SetStatus extends Component
{
    public $status = "https://d35aaqx5ub95lt.cloudfront.net/images/leagues/2439bac00452e99ba7bf6a7ed0b04196.svge";
    public function render()
    {
        return view('livewire.set-status');
    }
}
