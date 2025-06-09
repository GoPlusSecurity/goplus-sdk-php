<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\LockControllerApi;
use Swagger\Client\Api\TokenControllerV1Api;
use Swagger\Client\Api\TokenSecurityAPIForSolanaBetaApi;
use Swagger\Client\Api\TokenSecurityAPIForSuiApi;

class Locker extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $guzzle = $this->getGuzzleClient();
        $this->client = new LockControllerApi($guzzle);
    }

    /**
     * @param $chainId
     * @param $pageNum
     * @param $pageSize
     * @param $tokenAddress
     * @return \Swagger\Client\Model\ResponseWrapperTokenLockerResponse
     * @throws \Swagger\Client\ApiException
     */
    public function lockerToken($chainId, $pageNum, $pageSize, $tokenAddress)
    {
        return $this->client->getTokenLockersUsingGET($chainId, $pageNum, $pageSize, $tokenAddress, $this->accessToken);
    }

    /**
     * @param $chainId
     * @param $pageNum
     * @param $pageSize
     * @param $poolAddress
     * @return \Swagger\Client\Model\ResponseWrapperNftLockerResponse
     * @throws \Swagger\Client\ApiException
     */
    public function lockerLPV3($chainId, $pageNum, $pageSize, $poolAddress)
    {
        return $this->client->getNftLockersUsingGET($chainId, $pageNum, $pageSize, $poolAddress, $this->accessToken);
    }

}
