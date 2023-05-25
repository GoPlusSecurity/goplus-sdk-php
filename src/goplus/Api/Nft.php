<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\NftControllerApi;

class Nft extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new NftControllerApi($this->getGuzzleClient());
    }

    /**
     * @param mixed $chainId
     * @param mixed $address
     * @param null|mixed $tokenId
     * @throws \Swagger\Client\ApiException
     */
    public function nftSecurity($chainId, $address, $tokenId = null)
    {
        return $this->client->getNftInfoUsingGET1($chainId, $address, $this->accessToken, $tokenId);
    }
}
