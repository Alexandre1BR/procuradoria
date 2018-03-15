<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoUsuario;
use App\Data\Models\User;
use App\Services\Authorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class Users
 * @package App\Data\Repositories
 */
class Users extends Base
{
    /**
     * @var string
     */
    protected $model = User::class;

    /**
     * @var Authorization
     */
    private $authorization;

    /**
     * Users constructor.
     * @param Authorization $authorization
     */
    public function __construct(Authorization $authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * @param $email
     * @return mixed
     */
    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findUserById($id)
    {
        return User::find($id);
    }

    /**
     * @param $username
     * @return mixed
     */
    private function getTipoUsuario($username)
    {
        return TipoUsuario::where('nome', $this->authorization->getUserProfiles($username)->first())->first();
    }

    /**
     * @param $credentials
     * @param $remember
     */
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

    /**
     * @param $type
     * @return mixed
     */
    public function getByType($type)
    {
        return $this->makeResultForSelect($this->model::type($type)->get(), 'name');
    }

    /**
     * @return mixed
     */
    public function all()
    {
        //return User::all();
        return User::orderBy('name')->get();
    }
}
