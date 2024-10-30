<?php

namespace App\Livewire;

use App\Models\Level;
use Livewire\Component;
use App\Models\Theme;

class Themes extends Component
{
    public $name;
    public $nameSearch = "";
    public $levelNameSearch;

    public $level_id;
    public $themes;
    public $levels;
    public function mount()
    {
        $this->themes = Theme::all();
        $this->levels = Level::all();
    }
    public function search()
    {
        $this->themes = Theme::where('name', 'like', '%' . $this->nameSearch . '%');
        if ($this->levelNameSearch != "All") {
            $this->themes = $this->themes->where('level_id', $this->levelNameSearch);
        }
        $this->themes = $this->themes->get();
        // $this->mount();
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'level_id' => 'required|exists:levels,id',
        ]);

        // Create the theme
        Theme::create([
            'name' => $this->name,
            'level_id' => $this->level_id,
        ]);

        // Clear input fields
        $this->reset(['name', 'level_id']);  // Better than manually setting to empty strings

        // Refresh themes list
        $this->themes = Theme::with('level')->get(); // Eager loading for better performance
    }

    public function updateThemeName($themeId, $newValue)
    {
        $theme = Theme::find($themeId);
        $theme->name = $newValue;
        $theme->save();
    }

    public function updateThemeDescription($themeId, $newValue)
    {
        $theme = Theme::find($themeId);
        $theme->description = $newValue;
        $theme->save();
    }
    public function delete($id)
    {
        Theme::destroy($id);
        $this->mount();    // Refresh levels list
    }
    public function render()
    {
        return view('livewire.themes');
    }
}
