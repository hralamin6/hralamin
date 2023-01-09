<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use App\Models\Work;
use Livewire\Component;

class WorkDetailsComponent extends Component
{
    public $work;
    public function mount($id)
    {
        app()->setLocale(\session()->get('locale'));

        $this->work = Work::where('id', $id)->firstOrFail();
    }
    public function render()
    {
        $main = Setup::first();
        return view('livewire.work-details-component', compact('main'));
    }
}
