<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use App\Models\Resume;
use App\Models\Setup;
use App\Models\Skill;
use Livewire\Component;

class ResumeComponent extends Component
{
    public function mount()
    {
        app()->setLocale(\session()->get('locale'));

    }

    public function render()
    {
        $main = Setup::first();

        $educations = Resume::where('status', 'active')->where('type', 'education')->get();
        $rewards = Resume::where('status', 'active')->where('type', 'reward')->get();
        $experiences = Resume::where('status', 'active')->where('type', 'experience')->get();
        $skills = Skill::where('status', 'active')->get();
        $abilities = Ability::where('status', 'active')->get();
        return view('livewire.resume-component', compact('main', 'educations', 'experiences', 'rewards', 'skills', 'abilities'));
    }
}
