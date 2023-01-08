<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use App\Models\Setup;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $main = Setup::first();
        $abilities = Ability::where('status', 'active')->get();
        return view('livewire.about-component', compact('main', 'abilities'));
    }
}
