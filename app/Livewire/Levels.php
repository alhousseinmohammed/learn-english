<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Level;
use App\Http\Controllers\LevelController;

class Levels extends Component
{
    public $name;
    public $nameSearch = "";
    public $levels;
    public function mount()
    {
        $this->levels = Level::all();
    }
    public function search()
    {
        $this->levels = Level::where('name', 'like', '%' . $this->nameSearch . '%')->get();
        // $this->mount();
    }
    public function store()
    {
        $this->validate(['name' => 'required']);
        Level::create(['name' => $this->name]);
        $this->name = '';  // Clear input field
        $this->mount();    // Refresh levels list
    }
    public function updateName($level_id, $value)
    {
        $level = Level::find($level_id);
        $level->name = $value;
        $level->save();
    }
    public function delete($id)
    {
        Level::destroy($id);
        $this->mount();    // Refresh levels list
    }
    public function render()
    {
        return view('livewire.levels');
    }
}
