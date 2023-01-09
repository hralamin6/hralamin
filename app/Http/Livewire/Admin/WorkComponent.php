<?php

namespace App\Http\Livewire\Admin;

use App\Models\Work;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class WorkComponent extends Component
{
    use AuthorizesRequests;
    use LivewireAlert;
    use WithFileUploads;

    public $editmode, $title, $body, $details, $preview, $work;
    public $images=[], $main_image, $about_image;
    public function mount($id=null)
    {
        app()->setLocale(\session()->get('locale'));

        if ($id!=null){
            $this->editmode = true;
            $data = Work::where('id', $id)->firstOrFail();
            $this->work = $data;
            $this->title = $data->title;
            $this->preview = $data->preview;
            $this->body = $data->body;
            $this->details = $data->details;
        }

    }
    public function save()
    {
       $data = $this->validate([
            'title' => 'required',
            'preview' => 'required|url',
            'body' => 'required',
            'details' => 'required',
        ]);
       if ($this->editmode){
           $this->work->update($data);
           $this->alert('success', 'Successfully updated');
       }else{
           Work::create($data);
           $this->alert('success', 'Successfully saved');
       }
        $this->reset('title', 'preview', 'body', 'details', 'editmode');
    }

    public function updateStatus(Work $work)
    {
        if ($work->status==='active'){
            $work->status = 'inactive';
        }else{
            $work->status = 'active';
        }
        $work->save();
        $this->alert('success', 'Status successfully ' .$work->status.'d');

    }
    public function logoUpdate()
    {
        $this->validate([
            'logo' => ['required','image', 'max:1024']
        ]);
        if ($this->logo){
            $this->work->clearMediaCollection();
            $a = $this->work->addMedia($this->logo->getRealPath())->toMediaCollection('default');
//            unlink("media/".$a->id.'/'. $a->file_name);g
            $this->alert('success', __('Data updated successfully'));

            $this->reset('logo');
        }
    }
    public function mainImageUpdate()
    {
        $this->validate([
            'main_image' => ['required','image', 'max:1024']
        ]);
        if ($this->main_image){
            $this->work->clearMediaCollection('image');
            $a = $this->work->addMedia($this->main_image->getRealPath())->toMediaCollection('image');
            unlink("storage/media/".$a->id.'/'. $a->file_name);
            $this->alert('success', __('Data updated successfully'));
            $this->reset('main_image');
        }
    }

    public function updatedImages()
    {
        $this->validate([
            'images.*' => ['required','image', 'max:1024']
        ]);
    }
    public function aboutImageUpdate()
    {
        $this->validate([
            'images.*' => ['required','image', 'max:1024']
        ]);
            foreach ($this->images as $image){
                $a = $this->work->addMedia($image->getRealPath())->toMediaCollection('images');
                unlink("storage/media/".$a->id.'/'. $a->file_name);
            }
            $this->alert('success', __('Data updated successfully'));
            $this->reset('images');
        $this->mount($this->work->id);

    }
    public function deleteMedia(Work $work, $k)
    {
        $m = $work->getMedia('images');
        $m[$k]->delete();
        $this->alert('success', __('Data deleted successfully'));

        $this->mount($work->id);
    }

    public function confirmDeletion(Work $work)
    {
        $work->delete();
        $this->alert('success', __('Data deleted successfully'));

    }
    public function render()
    {
        $this->authorize('isAdmin');
        $works = Work::paginate();
        return view('livewire.admin.work-component', compact('works'));
    }
}
