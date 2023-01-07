<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $main = Setup::first();

        return view('livewire.blog-component', compact('main'));
    }
}
