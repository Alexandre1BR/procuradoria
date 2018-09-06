<?php

namespace App\Providers;

use App\Data\Repositories\Users;
use App\Services\Authorization;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @var Users
     */
    private $usersRepository;

    public function __construct()
    {
        $this->usersRepository = app(Users::class);
    }

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

    private function bootComposers()
    {
        View::composer('*', function ($view) {
            $view->with(array_merge(['formDisabled' => false, 'isFilter' => false], $view->getData()));
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
            if (config('auth.authorization.enabled')) {
                $permissions = app(Authorization::class)->getUserPermissions($user->username);

                $this->usersRepository->updateCurrentUser($permissions);

                // If the user has any permissions in the system, it is allowed to use it.
                return $permissions->count() > 0;
            }

            // When authorization is not disabled, user must not be disabled
            return is_null($user->disabled_at);
        });
    }
}
