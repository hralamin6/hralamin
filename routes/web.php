<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('home');
Route::get('/work', \App\Http\Livewire\WorkComponent::class)->name('work');
Route::get('/work/{id}', \App\Http\Livewire\WorkDetailsComponent::class)->name('work.details');
Route::get('/resume', \App\Http\Livewire\ResumeComponent::class)->name('resume');
Route::get('/contact', \App\Http\Livewire\ContactComponent::class)->name('contact');
//Route::get('/blog', \App\Http\Livewire\BlogComponent::class)->name('blog');
Route::get('/about', \App\Http\Livewire\AboutComponent::class)->name('about');
Route::middleware('auth')->group(function () {
    Route::get('admin/about', \App\Http\Livewire\Admin\AboutComponent::class)->name('admin.about');
    Route::get('admin/resume', \App\Http\Livewire\Admin\ResumeComponent::class)->name('admin.resume');
    Route::get('admin/skill', \App\Http\Livewire\Admin\SkillComponent::class)->name('admin.skill');
    Route::get('admin/contact', \App\Http\Livewire\Admin\ContactComponent::class)->name('admin.contact');
    Route::get('admin/setting', \App\Http\Livewire\Admin\SettingComponent::class)->name('admin.setting');
    Route::get('admin/work/{id?}', \App\Http\Livewire\Admin\WorkComponent::class)->name('admin.work');
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
