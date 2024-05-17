<?php

namespace App\Providers;

use App\Models\Tasks;
use App\Policies\TaskPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Table\DisplayRows;

class AppServiceProvider extends ServiceProvider
{   
    protected $policies = [
        Tasks::class => TaskPolicy::class,
    ];
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('table.display-rows', DisplayRows::class);

        // $this->registerPolicies();

        // Gate::define('admin-only', function ($user) {
        //     return $user->role === 'admin';
        // });

        // Gate::define('update-task', function ($user, $task) {
        //     return $user->id === $task->user_id || $user->role === 'admin';
        // });
    }
}
