<?php

namespace App\Services\Traits;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;

class RemoteRequest
{
    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * RemoteRequest constructor.
     */
    public function __construct()
    {
        $this->guzzle = new Guzzle();
    }

    /**
     * @param $url
     * @param $data
     *
     * @return mixed
     */
    public function post($url, $data)
    {
        try {
            $response = $this->guzzle->request(
                'POST',
                $url,
                [
                    'verify' => false,

                    'debug' => false,

                    RequestOptions::JSON => $data,

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
