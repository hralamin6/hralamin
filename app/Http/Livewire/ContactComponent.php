<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $main = Setup::first();

        return view('livewire.contact-component', compact('main'));
    }
}
