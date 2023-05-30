<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Auth;

use GuzzleHttp\Client;
use Swagger\Client\Api\TokenControllerApi;
use Swagger\Client\Model\GetAccessTokenRequest;

final class Auth
{
    private $key;

    private $secret;

    private $guzzleOptions = [];

    public function __construct($key, $secret, $guzzleOptions = [])
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->guzzleOptions = $guzzleOptions;
        $this->client = new TokenControllerApi($this->getGuzzleClient());
    }

    public function getKey()
    {
        return $this->key;
    }

    public function sign($key, $secret, $time)
    {
        return sha1($key . $time . $secret);
    }

    /**
     * @throws \Swagger\Client\ApiException
     */
    public function getAccessToken()
    {
        $time = time();
        $body = new GetAccessTokenRequest([
            'app_key' => $this->key,
            'sign' => $this->sign($this->key, $this->secret, $time),
            'time' => $time,
        ]);

        return $this->client->getAccessTokenUsingPOST($body);
    }

    public function getGuzzleClient()
    {
        return new Client($this->guzzleOptions);
    }

    public function setClient($client)
    {
        $this->client = $client;
    }
}
