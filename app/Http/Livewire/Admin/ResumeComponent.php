<?php

namespace App\Http\Livewire\Admin;

use App\Models\Resume;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ResumeComponent extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithFileUploads;

    public $editmode, $title, $date, $type, $institute, $item;
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }

    public function loadData($id)
    {
        $this->editmode = true;
        $data = Resume::where('id', $id)->firstOrFail();
        $this->item = $data;
        $this->title = $data->title;
        $this->date = $data->date;
        $this->type = $data->type;
        $this->institute = $data->institute;

    }
    public function save()
    {
       $data = $this->validate([
            'title' => 'required',
            'date' => 'required',
            'type' => 'required',
            'institute' => 'required',
        ]);
       if ($this->editmode){
           $this->item->update($data);
           $this->alert('success', __('Data updated successfully'));
       }else{
           Resume::create($data);
           $this->alert('success', __('Data saved successfully'));
       }
        $this->reset('title', 'type', 'institute', 'date', 'editmode');
    }

    public function updateStatus(Resume $item)
    {
        if ($item->status==='active'){
            $item->status = 'inactive';
        }else{
            $item->status = 'active';
        }
        $item->save();
        $this->alert('success', __('Data updated successfully'));

    }
    public function confirmDeletion(Resume $item)
    {
        $item->delete();
        $this->alert('success', __('Data deleted successfully'));

    }
    public function render()
    {
        $this->authorize('isAdmin');
        $items = Resume::paginate();
        return view('livewire.admin.resume-component', compact('items'));
    }
}
