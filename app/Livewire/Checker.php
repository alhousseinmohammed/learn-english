<?php

namespace App\Livewire;

use Livewire\Component;

class Checker extends Component
{
    public $exercise;
    public $answer;
    public function mount($exercise)  // This method is called when the component is initialized
    {
        $this->exercise = $exercise;  // Assign the passed exercise variable to the component property
    }

    public $name = "check";
    public function change () {
        if ($this->answer == $this->exercise->answer)
        {$this->name = $this->exercise->id;
            // return redirect()->action('App\Ht);
            // return redirect()->route('exercise.showNext', ['id' => 15]);
            redirect(url('/exercise/next/' . $this->exercise->id));

            // redirect()->route('exercise.showNext', $this->exercise->id+1);
        }
        // $this->name = $this->name == "check" ? "checked" : "check";
    }
    public function render()
    {
        return view('livewire.checker');
    }
}
