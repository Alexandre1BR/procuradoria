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
        return collect($this->remoteRequest->post(static::USERS_URL, ['username' => $username]));
    }
}
