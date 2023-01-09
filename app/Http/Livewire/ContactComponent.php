<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Setup;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ContactComponent extends Component
{
    use LivewireAlert;
    public $name, $email, $message;

    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }
    public function index()
    {
       $data = $this->validate([
           'name' => 'required|max:20',
           'message' => 'required|max:2000',
           'email' => 'required|email',
        ]);
        Mail::to('hralamin2020@gmail.com')->send(new ContactMail($data));
        $this->alert('success', 'Successfully saved');
    }
    public function render()
    {


        $main = Setup::first();

        return view('livewire.contact-component', compact('main'));
    }
}
