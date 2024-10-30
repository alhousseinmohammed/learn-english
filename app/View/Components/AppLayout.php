<?php

// app/View/Components/AppLayout.php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $week;
    public function render()
    {
        return view('layouts.app');
    }
}
