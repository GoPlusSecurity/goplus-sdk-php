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
use Swagger\Client\Api\TransactionSimulationForSolanaApi;
use Swagger\Client\Model\ParseAbiDataRequest;
use Swagger\Client\Model\SolanaPrerunTxRequest;

class TxSimulation extends Base
{
    public function __construct($accessToken = null, $guzzleOptions = [])
    {
        parent::__construct($accessToken, $guzzleOptions);
        $guzzle = $this->getGuzzleClient();
        $this->client = new TransactionSimulationForSolanaApi($guzzle);
    }

    public function solanaTxSimulation($encodedTransaction)
    {
        $body = new SolanaPrerunTxRequest([
            "encoded_transaction" => $encodedTransaction
        ]);

        return $this->client->prerunTxUsingPOST($body, $this->accessToken);
    }

}
