<?php

namespace App\Livewire;

use Livewire\Component;

class Words extends Component
{
    public $words;
    public $learner;
    public function mount()
    {
        // $this->learner = auth()->user()->learner->progress->lesson  ;
        $words_bunches = auth()->user()->learner?->progress
            ->flatMap(fn($progress) => $progress->lesson?->exercises ?? collect())->map(fn($exercise) => $exercise->options);

        $this->words = $words_bunches->flatMap(fn($words_bunches) => $words_bunches);
        // dd($words);
    }
    public function render()
    {
        return view('livewire.words');
    }
}
