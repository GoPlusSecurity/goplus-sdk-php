<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Api;

use Swagger\Client\Api\ContractAbiControllerApi;
use Swagger\Client\Model\ParseAbiDataRequest;

class Decode extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $this->client = new ContractAbiControllerApi($this->getGuzzleClient());
    }

    /**
     * @param mixed $chainId
     * @param mixed $data
     * @param null|mixed $address
     * @param null|mixed $signer
     * @param null|mixed $transactionType
     * @param null|mixed $input
     * @throws \Swagger\Client\ApiException
     */
    public function signatureDataDecode($chainId, $data, $address = null, $signer = null, $transactionType = null, $input = null)
    {
        $body = new ParseAbiDataRequest([
            'data' => $data,
            'signer' => $signer,
            'input' => $input,
            'chain_id' => $chainId,
            'transaction_type' => $transactionType,
            'contract_address' => $address,
        ]);

        return $this->client->getAbiDataInfoUsingPOST($body, $this->accessToken);
    }
}
