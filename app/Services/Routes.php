<?php

namespace App\Services;

class Routes
{
    /**
     * @return array
     */
    public function makeAppRootRouteMiddlewares()
    {
        return collect([
            config('auth.authentication.enabled', true) ? 'auth' : null,
            config('auth.authorization.enabled', true) ? 'app.users' : null,
        ])
            ->reject(function ($value) {
                return empty($value);
            })
            ->toArray();
    }
}
