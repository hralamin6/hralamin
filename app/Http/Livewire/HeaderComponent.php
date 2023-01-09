<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $locale;

    public function mount()
    {
        if (\session()->has('locale')){
            app()->setLocale(\session()->get('locale'));
        }else{
            \session()->put('locale', app()->getLocale());
        }
    }
    public function updatedLocale()
    {
        \session()->put('locale', $this->locale);
        $this->mount();
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    public function render()
    {
        $main = Setup::first();
        return view('livewire.header-component', compact('main'));
    }
}
