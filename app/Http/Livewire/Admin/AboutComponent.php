<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ability;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutComponent extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithFileUploads;

    public $editmode, $title, $body, $icon, $item;
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }

    public function loadData($id)
    {
        $this->editmode = true;
        $data = Ability::where('id', $id)->firstOrFail();
        $this->item = $data;
        $this->title = $data->title;
        $this->icon = $data->icon;
        $this->body = $data->body;

    }
    public function save()
    {
       $data = $this->validate([
            'title' => 'required',
            'icon' => 'required',
            'body' => 'required',
        ]);
       if ($this->editmode){
           $this->item->update($data);
           $this->alert('success', __('Data updated successfully'));
       }else{
           Ability::create($data);
           $this->alert('success', __('Data saved successfully'));
       }
        $this->reset('title', 'icon', 'body', 'editmode');
    }

    public function updateStatus(Ability $item)
    {
        if ($item->status==='active'){
            $item->status = 'inactive';
        }else{
            $item->status = 'active';
        }
        $item->save();
        $this->alert('success', __('Data updated successfully'));

    }
    public function confirmDeletion(Ability $item)
    {
        $item->delete();
        $this->alert('success', __('Data deleted successfully'));

    }
    public function render()
    {
        $this->authorize('isAdmin');
        $items = Ability::paginate();
        return view('livewire.admin.about-component', compact('items'));
    }
}
