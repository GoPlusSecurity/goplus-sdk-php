<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\ApproveControllerV1Api;

class Address extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new ApproveControllerV1Api($this->getGuzzleClient());
    }

    /**
     * @param mixed $address
     * @param null|mixed $chainId
     * @throws \Swagger\Client\ApiException
     */
    public function addressSecurity($address, $chainId = null)
    {
        return $this->client->addressContractUsingGET1($address, $this->accessToken, $chainId);
    }
}
