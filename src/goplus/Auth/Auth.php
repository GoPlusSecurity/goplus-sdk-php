<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Auth;

use GuzzleHttp\ClientInterface;
use Swagger\Client\Api\TokenControllerApi;
use Swagger\Client\Model\GetAccessTokenRequest;

final class Auth
{
    private $key;

    private $secret;

    private $client;

    public function __construct($key, $secret, ClientInterface $client = null)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->client = new TokenControllerApi($client);
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
}
