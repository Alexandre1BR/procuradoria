<?php

namespace App\Providers;

use App\Services\Authorization;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerGates();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function registerGates()
    {
        Gate::define('use-app', function ($user) {
            // If the user has any permissions in the system, it is allowed to use it.
            return app(Authorization::class)->getUserPermissions($user->username)->count() > 0;
        });
    }
}
