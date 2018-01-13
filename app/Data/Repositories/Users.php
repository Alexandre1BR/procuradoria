<?php

namespace App\Data\Repositories;

use App\Data\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Users
{
    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function loginUser($credentials, $remember)
    {
        if (is_null($user = $this->findUserByEmail($email = "{$credentials['username']}@alerj.rj.gov.br"))) {
            $user = new User();

            $user->name = $credentials['username'];

            $user->username = $credentials['username'];

            $user->email = $email;

            $user->password = Hash::make($email);

            $user->save();
        }

        Auth::login($user, $remember);
    }
}
