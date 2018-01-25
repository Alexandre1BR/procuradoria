<?php

namespace App\Providers;

use App\Services\Authorization;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        $this->bootGates();

        $this->bootComposers();
    }

    /**
     *
     */
    private function bootComposers()
    {
        View::composer('*', function ($view) {
            $view->with(array_merge([
                'formDisabled' => false
            ], $view->getData()));
        });
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

    private function bootGates()
    {
        Gate::define('use-app', function ($user) {
            // If the user has any permissions in the system, it is allowed to use it.
            return app(Authorization::class)->getUserPermissions($user->username)->count() > 0;
        });
    }
}
