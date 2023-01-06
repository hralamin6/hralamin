<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Setup;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\View;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        $gate->define('isAdmin', function ($user){
            return $user->type == 'admin';
        });
        $gate->define('isUser', function ($user){
            return $user->type == 'user';
        });
        View::share('main', Setup::first());
    }
}
