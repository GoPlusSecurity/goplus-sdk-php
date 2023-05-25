<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\ApproveControllerV1Api;
use Swagger\Client\Api\ApproveControllerV2Api;

class Approve extends Base
{
    private $clientV2;

    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new ApproveControllerV1Api($this->getGuzzleClient());
        $this->clientV2 = new ApproveControllerV2Api($this->getGuzzleClient());
    }

    /**
     * @param mixed $chainId
     * @param mixed $address
     * @throws \Swagger\Client\ApiException
     */
    public function approveSecurityV1($chainId, $address)
    {
        return $this->client->addressContractUsingGET1($address, $this->accessToken, $chainId);
    }

    public function tokenApproveSecurity($chainId, $address)
    {
        return $this->clientV2->addressTokenApproveListUsingGET1($address, $chainId, $this->accessToken);
    }

    public function erc721ApproveSecurity($chainId, $address)
    {
        return $this->clientV2->addressNFT721ApproveListUsingGET1($address, $chainId, $this->accessToken);
    }

    public function erc1155ApproveSecurity($chainId, $address)
    {
        return $this->clientV2->addressNFT1155ApproveListUsingGET1($address, $chainId, $this->accessToken);
    }

    public function setClientv2($client)
    {
        $this->clientV2 = $client;
    }
}
