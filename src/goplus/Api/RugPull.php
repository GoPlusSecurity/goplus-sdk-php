<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\DefiControllerApi;

class RugPull extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new DefiControllerApi($this->getGuzzleClient());
    }

    /**
     * @param mixed $chainId
     * @param mixed $address
     * @throws \Swagger\Client\ApiException
     */
    public function rugPullSecurity($chainId, $address)
    {
        return $this->client->getDefiInfoUsingGET($address, $chainId, $this->accessToken);
    }
}
