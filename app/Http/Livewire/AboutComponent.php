<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use App\Models\Setup;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class AboutComponent extends Component
{
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }
    public function render()
    {
        $main = Setup::first();
        $abilities = Ability::where('status', 'active')->get();
        return view('livewire.about-component', compact('main', 'abilities'));
    }
}
