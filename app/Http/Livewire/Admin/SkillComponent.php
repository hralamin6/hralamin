<?php

namespace App\Http\Livewire\Admin;

use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class SkillComponent extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithFileUploads;

    public $editmode, $name, $progress, $item;
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }

    public function loadData($id)
    {
        $this->editmode = true;
        $data = Skill::where('id', $id)->firstOrFail();
        $this->item = $data;
        $this->name = $data->name;
        $this->progress = $data->progress;
    }
    public function save()
    {
       $data = $this->validate([
            'name' => 'required',
            'progress' => 'required|numeric',
        ]);
       if ($this->editmode){
           $this->item->update($data);
           $this->alert('success', __('Data updated successfully'));
       }else{
           Skill::create($data);
           $this->alert('success', __('Data saved successfully'));
       }
        $this->reset('name', 'progress', 'editmode');
    }

    public function updateStatus(Skill $item)
    {
        if ($item->status==='active'){
            $item->status = 'inactive';
        }else{
            $item->status = 'active';
        }
        $item->save();
        $this->alert('success', __('Data updated successfully'));

    }
    public function confirmDeletion(Skill $item)
    {
        $item->delete();
        $this->alert('success', __('Data deleted successfully'));

    }
    public function render()
    {
        $this->authorize('isAdmin');
        $items = Skill::paginate();
        return view('livewire.admin.skill-component', compact('items'));
    }
}
