<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoUsuario;
use App\Data\Models\User;
use App\Services\Authorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Users extends Base
{
    protected $model = User::class;

    /**
     * @var Authorization
     */
    private $authorization;

    public function __construct(Authorization $authorization)
    {
        $this->authorization = $authorization;
    }

    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    private function getTipoUsuario($username)
    {
        return TipoUsuario::where('nome', $this->authorization->getUserProfiles($username)->first())->first();
    }

    public function loginUser($credentials, $remember)
    {
        if (is_null($user = $this->findUserByEmail($email = "{$credentials['username']}@alerj.rj.gov.br"))) {
            $user = new User();

            $user->name = $credentials['username'];

            $user->username = $credentials['username'];

            $user->email = $email;

            $user->password = Hash::make($email);

            $user->user_type_id = $this->getTipoUsuario($credentials['username'])->id;

            $user->save();
        }

        Auth::login($user, $remember);
    }

    public function getByType($type)
    {
        return $this->makeResultForSelect($this->model::type($type)->get(), 'name');
    }
}
