<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\DappControllerApi;

class Dapp extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new DappControllerApi($this->getGuzzleClient());
    }

    /**
     * @param mixed $url
     * @throws \Swagger\Client\ApiException
     */
    public function dappSecurity($url)
    {
        return $this->client->getDappInfoUsingGET($this->accessToken, $url);
    }
}
