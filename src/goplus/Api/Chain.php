<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\TokenControllerV1Api;

class Chain extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new TokenControllerV1Api($this->getGuzzleClient());
    }

    /**
     * @param mixed $name
     * @throws \Swagger\Client\ApiException
     */
    public function getChainList($name = '')
    {
        return $this->client->getChainsListUsingGET($this->accessToken, $name);
    }
}
