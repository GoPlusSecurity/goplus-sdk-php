<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\TokenControllerV1Api;

class Token extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new TokenControllerV1Api($this->getGuzzleClient());
    }

    /**
     * @param mixed $chainId
     * @param mixed $address
     * @throws \Swagger\Client\ApiException
     */
    public function tokenSecurity($chainId, $address)
    {
        return $this->client->tokenSecurityUsingGET1($chainId, $address, $this->accessToken);
    }
}
