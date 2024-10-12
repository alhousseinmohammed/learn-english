<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Status;

class SetStatus extends Component
{
    public $statuses;
    public $current_status;
    public $learner;
    public function mount() {
        $this->learner  = auth()->user()->learner;
        $this->current_status = $this->learner->status;
        $this->statuses = Status::all();
        // dd($this->current_status);
    }
    public function updateStatus($newStatus) {
        $newstatud_id = $newStatus['id'];
        // $this->current_status = $newStatus;
        $this->learner->status_id = $newstatud_id;
        $this->learner->save();
        $this->current_status = $this->learner->status;
        // auth()->user()->learner->status_id = $this->current_status->id;
    }
    public function clear() {
        $this->current_status = null;
    }
    public function render()
    {
        return view('livewire.set-status');
    }
}
