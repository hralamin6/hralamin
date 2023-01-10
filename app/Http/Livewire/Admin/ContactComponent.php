<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactComponent extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithFileUploads;

    public $editmode, $name, $email,$message, $item;
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }

    public function loadData($id)
    {
        $this->editmode = true;
        $data = Contact::where('id', $id)->firstOrFail();
        $this->item = $data;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->message = $data->message;
    }
    public function save()
    {
       $data = $this->validate([
            'name' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);
       if ($this->editmode){
           $this->item->update($data);
           $this->alert('success', __('Data updated successfully'));
       }else{
           Contact::create($data);
           $this->alert('success', __('Data saved successfully'));
       }
        $this->reset('name', 'email', 'message', 'editmode');
    }

    public function updateStatus(Contact $item)
    {
        if ($item->status==='active'){
            $item->status = 'inactive';
        }else{
            $item->status = 'active';
        }
        $item->save();
        $this->alert('success', __('Data updated successfully'));

    }
    public function confirmDeletion(Contact $item)
    {
        $item->delete();
        $this->alert('success', __('Data deleted successfully'));

    }
    public function render()
    {
        $this->authorize('isAdmin');
        $items = Contact::paginate();
        return view('livewire.admin.contact-component', compact('items'));
    }
}
