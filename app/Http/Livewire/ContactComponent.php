<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
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
        $a = Mail::to('hralamin2020@gmail.com')->send(new ContactMail($data));
        $this->alert('success', __('Data updated successfully'));
    }
    public function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);
            Contact::create($data);
            $this->alert('success', __('Data sent successfully'));
        $this->reset('name', 'email', 'message');
    }

    public function render()
    {


        $main = Setup::first();

        return view('livewire.contact-component', compact('main'));
    }
}
