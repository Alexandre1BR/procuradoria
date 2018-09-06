<?php

namespace App\Data\Repositories;

use App\Data\Models\TipoUsuario;
use App\Data\Models\User;
use App\Services\Authorization;
use App\Services\Users as UsersService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Users extends Base
{
    /**
     * @var string
     */
    protected $model = User::class;

    protected $tiposUsuarios;

    /**
     * @var Authorization
     */
    private $authorization;
    /**
     * @var UsersService
     */
    private $usersService;

    /**
     * Users constructor.
     *
     * @param Authorization $authorization
     * @param TiposUsuarios $tiposUsuarios
     * @param UsersService  $usersService
     */
    public function __construct(Authorization $authorization, TiposUsuarios $tiposUsuarios, UsersService $usersService)
    {
        $this->authorization = $authorization;

        $this->tiposUsuarios = $tiposUsuarios;

        $this->usersService = $usersService;
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    private function credentials($request)
    {
        return $request->only(['username', 'password']);
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function findUserById($id)
    {
        return User::find($id);
    }

    /**
     * @param $username
     *
     * @return mixed
     */
    private function getTipoUsuario($username)
    {
        return TipoUsuario::where('nome', $this->authorization->getUserProfiles($username)->first())->first();
    }

    private function getUserTypeFromPermissions($permissions)
    {
        if ($this->isAdministrador($permissions)) {
            return 'Administrador';
        }

        return studly_case(
            $this->isType($permissions, 'Administrador')
                ? 'administrador'
                : (
                    $this->isType($permissions, 'Procurador')
                        ? $type = 'procurador'
                        : (
                            $this->isType($permissions, 'Assessor')
                                ? $type = 'assessor'
                                : ($this->isType($permissions, 'Estagi') ? $type = 'estagiario' : '')
                        )
                )
        );
    }

    private function isAdministrador($permissions)
    {
        return
            $this->isType($permissions, 'Procurador') &&
            $this->isType($permissions, 'Assessor') &&
            $this->isType($permissions, 'Estagi');
    }

    /**
     * @param $permissions
     * @param $type
     *
     * @return bool
     */
    private function isType($permissions, $type)
    {
        return
            $permissions
                ->filter(function ($user) use ($type) {
                    return starts_with($user['nomeFuncao'], $type);
                })
                ->count() > 0;
    }

    /**
     * @param $request
     * @param $remember
     *
     * @return bool
     */
    public function loginUser($request, $remember)
    {
        try {
            $credentials = extract_credentials($request);

            if (is_null($user = $this->findUserByEmail($email = "{$credentials['username']}@alerj.rj.gov.br"))) {
                $user = new User();

                $user->name = $credentials['username'];

                $user->username = $credentials['username'];

                $user->email = $email;

                $user->password = Hash::make($email);

                $user->save();

                $this->updateUserTypeFromPermissions(
                    $this->getUserTypeFromPermissions(app(Authorization::class)->getUserPermissions($user->username)),
                    $user
                );
            }

            Auth::login($user, $remember);
        } catch (\Exception $exception) {
            return false;
        }

        return true;
    }

    /**
     * @param $type
     *
     * @return mixed
     */
    public function getByType($type)
    {
        $type = $this->tiposUsuarios->findByName($type);

        $model = $this->model;

        return $this->makeResultForSelect($model::where('user_type_id', $type->id)->get(), 'name');
    }

    /**
     * @return mixed
     */
    public function all()
    {
        $query = User::orderBy('name');

        if (!is_administrator()) {
            $administrator = $this->tiposUsuarios->findByName('Administrador');

            $query->where('user_type_id', '!=', $administrator->id);
        }

        return $query->get();
    }

    public function notifiables()
    {
        return User::where('all_notifications', true)->get();
    }

    public function updateCurrentUser($permissions)
    {
        if (config('auth.authorization.enabled')) {
            $this->updateUserNameFromLdap(Auth::user());

            $this->updateUserTypeFromPermissions($permissions, Auth::user());
        }
    }

    public function updateUserNameFromLdap($user)
    {
        if (count(explode(' ', $user->name)) > 1) {
            return $user;
        }

        $data = $this->usersService->getUserInfo($user->username);

        if ($data && isset($data['name'][0])) {
            $user->name = $data['name'][0];

            $user->save();
        }

        return $user;
    }

    /**
     * @param $permissions
     * @param $user
     */
    private function updateUserTypeFromPermissions($permissions, $user)
    {
        $userType = $this->tiposUsuarios->findByName($this->getUserTypeFromPermissions($permissions));

        if ($userType) {
            $user->user_type_id = $userType->id;

            $user->save();
        }
    }
}
