<?php

namespace App\Services;

use App\Data\Repositories\Users as UsersRepository;
use App\Services\Traits\RemoteRequest;

class Authorization
{
    const PERMISSIONS_URL = 'http://apiportal.alerj.rj.gov.br/api/v1.0/adm-user/K7k8H95loFpTH0ZTRKX2BhADIusjXHInHW3cspyosOoNrbd5jOG3pd61F4d6fg584Gg5h4DSjui1k/permissions';

    const SYSTEM_NAME = 'Procuradoria';

    /**
     * @var RemoteRequest
     */
    private $remoteRequest;

    /**
     * Authorization constructor.
     *
     * @param RemoteRequest $remoteRequest
     */
    public function __construct(RemoteRequest $remoteRequest)
    {
        $this->remoteRequest = $remoteRequest;
    }

    /**
     * @param $username
     *
     * @return \Illuminate\Support\Collection
     */
    public function getUserPermissions($username)
    {
        if (config('auth.authorization.mock')) {
            return $this->mockedPermissions($username);
        }

        try {
            $response = collect(
                $this->remoteRequest->post(static::PERMISSIONS_URL, [
                    'username' => $username,
                    'system'   => static::SYSTEM_NAME,
                ])
            );

            return $response;
        } catch (\Exception $exception) {
            //Logando com as permissões salvas
            $usersRepository = app(UsersRepository::class);
            $user = $usersRepository->findByColumn('username', $username);

            return $this->storedPermissions($user);
        }
    }

    /**
     * @param $username
     *
     * @return \Illuminate\Support\Collection
     */
    public function getUserProfiles($username)
    {
        return collect(['Estagiario']);
    }

    /**
     * @param $username
     *
     * @return \Illuminate\Support\Collection
     */
    private function mockedPermissions($username)
    {
        return collect(['Editar']);
    }

    private function storedPermissions($user)
    {
        $permissionsArray[] = collect([
            'nomeFuncao' => $user->userType->nome,
            'evento'     => $user->userType->nome,
        ]);

        return collect($permissionsArray);
    }
}
