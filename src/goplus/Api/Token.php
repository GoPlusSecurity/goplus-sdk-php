<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\TokenControllerV1Api;
use Swagger\Client\Api\TokenSecurityAPIForSolanaBetaApi;
use Swagger\Client\Api\TokenSecurityAPIForSuiApi;

class Token extends Base
{
    protected $solanaClient;

    protected $suiClient;

    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $guzzle = $this->getGuzzleClient();
        $this->client = new TokenControllerV1Api($guzzle);
        $this->solanaClient = new TokenSecurityAPIForSolanaBetaApi($guzzle);
        $this->suiClient = new TokenSecurityAPIForSuiApi($guzzle);
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

    /**
     * @param $address
     * @return \Swagger\Client\Model\ResponseWrapperSolanaTokenSecurity
     * @throws \Swagger\Client\ApiException
     */
    public function solanaTokenSecurity($address)
    {
        return $this->solanaClient->solanaTokenSecurityUsingGET($address, $this->accessToken);
    }

    /**
     * @param $address
     * @return \Swagger\Client\Model\ResponseWrapperSuiTokenSecurity
     * @throws \Swagger\Client\ApiException
     */
    public function suiTokenSecurity($address)
    {
        return $this->suiClient->suiTokenSecurityUsingGET($address, $this->accessToken);
    }
}
