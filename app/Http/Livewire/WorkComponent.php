<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use App\Models\Work;
use Livewire\Component;

class WorkComponent extends Component
{
    public function render()
    {
        $main = Setup::first();
        $works = Work::where('status', 'active')->get();
        return view('livewire.work-component', compact('main', 'works'));
    }
}
