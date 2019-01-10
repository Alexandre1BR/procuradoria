<?php

namespace App\Services;

use App\Services\Traits\RemoteRequest;

class Users
{
    const USERS_URL = 'http://apiportal.alerj.rj.gov.br/api/v1.0/ldap/0IYFFiMHuUr1sYo6wEtjUsJQ7Zicg33SMuvtrFk9yEgwrORmblNSMdpTH0ZTRKX2BhADIusjXHInHW3cspyosOoNrbd5jObK5Uoh/user';

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
    public function getUserInfo($username)
    {
        try {
            return collect($this->remoteRequest->post(static::USERS_URL, ['username' => $username]));
        } catch (\Exception $exception) {
            return collect($this->mockedAuthentication($username));
        }
    }

    /**
     * @param $credentials
     *
     * @return array
     */
    protected function mockedAuthentication($username)
    {
        return [
                'name'     => [$username],
                'email'    => [$username.'@alerj.rj.gov.br'],
                'memberof' => [
                    'CN=ProjEsp,OU=SDGI,OU=Departamentos,OU=ALERJ,DC=alerj,DC=gov,DC=br',
                    'CN=SDGI,OU=SDGI,OU=Departamentos,OU=ALERJ,DC=alerj,DC=gov,DC=br',
                ],
                'description' => ['matricula: N/C'],
        ];
    }
}
