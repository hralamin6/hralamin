<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Livewire\Component;

class ResumeComponent extends Component
{
    public function render()
    {
        $main = Setup::first();

        return view('livewire.resume-component', compact('main'));
    }
}
