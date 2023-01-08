<?php

namespace App\Http\Livewire;

use App\Models\Setup;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HeaderComponent extends Component
{

    public function changeLang($lang)
    {
//        if (session()->has('locale')){
//            if (session()->get('locale')=='en'){
//                App::setLocale('bn');
//                session()->put('locale', 'bn');
//            }else{
//                App::setLocale('en');
//                session()->put('locale', 'en');
//            }
//            return redirect()->to(url()->previous());
//        }else{
            App::setLocale($lang);
            session()->put('locale', $lang);
//            dd($lang);
//        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('home'));

    }
    public function render()
    {
        if (session()->has('locale')){
                App::setLocale(session()->get('locale'));
        }

        $main = Setup::first();
        return view('livewire.header-component', compact('main'));
    }
}
