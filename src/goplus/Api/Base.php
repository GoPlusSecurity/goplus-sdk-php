<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use GuzzleHttp\Client;

class Base
{
    protected $accessToken;

    protected $guzzleOptions = [];

    protected $client;

    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        $this->accessToken = $accessToken;
        $this->guzzleOptions = $guzzleOptions;
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
