<?php

namespace App\Services;

use App\Data\Repositories\Users;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;

class Authentication
{
    const LOGIN_URL = 'https://apiportal.alerj.rj.gov.br/api/v1.0/ldap/0IYFFiMHuUr1sYo6wEtjUsJQ7Zicg33SMuvtrFk9yEgwrORmblNSMdpTH0ZTRKX2BhADIusjXHInHW3cspyosOoNrbd5jObK5Uoh/login';

    const USER_INFO_URL = 'http://apiportal.alerj.rj.gov.br/api/v1.0/ldap/d6fFGg5h4jui1k5loFG3p7d6fg5h4j3kDS8HJ/user';

    const PERMISSIONS_URL = 'http://apiportal.alerj.rj.gov.br/api/v1.0/adm-user/K7k8H95loFpTH0ZTRKX2BhADIusjXHInHW3cspyosOoNrbd5jOG3pd61F4d6fg584Gg5h4DSjui1k/permissions';

    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * @var Users
     */
    private $usersRepository;

    public function __construct(Users $usersRepository)
    {
        $this->instantiateGuzzle();

        $this->usersRepository = $usersRepository;
    }

    public function attempt($credentials, $remember)
    {
        $credentials['username'] = $this->extractUsernameFromEmail($credentials['email']);

        return $this->loginUser(
            $credentials,
            $this->remotePostJson(static::LOGIN_URL, $credentials),
            $remember
        );
    }

    protected function extractUsernameFromEmail($email)
    {
        if (($pos = strpos($email, '@')) === false) {
            return $email;
        }

        return substr($email, 0, $pos);
    }

    protected function instantiateGuzzle()
    {
        $this->guzzle = new Guzzle();
    }

    /**
     * @param $credentials
     * @param $response
     * @param $remember
     *
     * @return mixed
     */
    private function loginUser($credentials, $response, $remember)
    {
        if ($success = $response['success']) {
            $this->usersRepository->loginUser($credentials, $remember);
        }

        return $success;
    }

    protected function remotePostJson($url, $credentials)
    {
        try {
            $response = $this->guzzle->request(
                'POST',
                $url,
                [
                    'verify' => false,

                    'debug' => false,

                    RequestOptions::JSON => $credentials,

                    'allow_redirects' => true,
                ]
            );
        } catch (ClientException $exception) {
            $response = $exception->getResponse();
        }

        if (is_null($array = json_decode((string) $response->getBody(), true))) {
            abort('Invalid response');
        }

        return $array;
    }
}
