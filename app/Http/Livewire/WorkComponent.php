<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Livewire\Component;

class WorkComponent extends Component
{
    public function render()
    {
        $main = Setup::first();
        return view('livewire.work-component', compact('main'));
    }
}
