<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $main = Setup::first();

        return view('livewire.about-component', compact('main'));
    }
}
