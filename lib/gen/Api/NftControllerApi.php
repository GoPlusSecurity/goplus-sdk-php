<?php
/**
 * NftControllerApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GoPlus Security API Documentation
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * NftControllerApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NftControllerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getNftInfoUsingGET1
     *
     * Get NFT's security and risk data.
     *
     * @param  string $chain_id Chain id, (eth: 1, bsc: 56, Polygon: 137, Avalanche: 43114) (required)
     * @param  string $contract_addresses NFT contract address (required)
     * @param  string $authorization Authorization example：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW... (optional)
     * @param  string $token_id tokenId (optional, default to NFT token id)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ResponseWrapperJSONObject59da6cfeB2f246e4936a6968cc97141b
     */
    public function getNftInfoUsingGET1($chain_id, $contract_addresses, $authorization = null, $token_id = 'NFT token id')
    {
        list($response) = $this->getNftInfoUsingGET1WithHttpInfo($chain_id, $contract_addresses, $authorization, $token_id);
        return $response;
    }

    /**
     * Operation getNftInfoUsingGET1WithHttpInfo
     *
     * Get NFT's security and risk data.
     *
     * @param  string $chain_id Chain id, (eth: 1, bsc: 56, Polygon: 137, Avalanche: 43114) (required)
     * @param  string $contract_addresses NFT contract address (required)
     * @param  string $authorization Authorization example：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW... (optional)
     * @param  string $token_id tokenId (optional, default to NFT token id)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ResponseWrapperJSONObject59da6cfeB2f246e4936a6968cc97141b, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNftInfoUsingGET1WithHttpInfo($chain_id, $contract_addresses, $authorization = null, $token_id = 'NFT token id')
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperJSONObject59da6cfeB2f246e4936a6968cc97141b';
        $request = $this->getNftInfoUsingGET1Request($chain_id, $contract_addresses, $authorization, $token_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ResponseWrapperJSONObject59da6cfeB2f246e4936a6968cc97141b',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getNftInfoUsingGET1Async
     *
     * Get NFT's security and risk data.
     *
     * @param  string $chain_id Chain id, (eth: 1, bsc: 56, Polygon: 137, Avalanche: 43114) (required)
     * @param  string $contract_addresses NFT contract address (required)
     * @param  string $authorization Authorization example：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW... (optional)
     * @param  string $token_id tokenId (optional, default to NFT token id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNftInfoUsingGET1Async($chain_id, $contract_addresses, $authorization = null, $token_id = 'NFT token id')
    {
        return $this->getNftInfoUsingGET1AsyncWithHttpInfo($chain_id, $contract_addresses, $authorization, $token_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNftInfoUsingGET1AsyncWithHttpInfo
     *
     * Get NFT's security and risk data.
     *
     * @param  string $chain_id Chain id, (eth: 1, bsc: 56, Polygon: 137, Avalanche: 43114) (required)
     * @param  string $contract_addresses NFT contract address (required)
     * @param  string $authorization Authorization example：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW... (optional)
     * @param  string $token_id tokenId (optional, default to NFT token id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNftInfoUsingGET1AsyncWithHttpInfo($chain_id, $contract_addresses, $authorization = null, $token_id = 'NFT token id')
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperJSONObject59da6cfeB2f246e4936a6968cc97141b';
        $request = $this->getNftInfoUsingGET1Request($chain_id, $contract_addresses, $authorization, $token_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getNftInfoUsingGET1'
     *
     * @param  string $chain_id Chain id, (eth: 1, bsc: 56, Polygon: 137, Avalanche: 43114) (required)
     * @param  string $contract_addresses NFT contract address (required)
     * @param  string $authorization Authorization example：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW... (optional)
     * @param  string $token_id tokenId (optional, default to NFT token id)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getNftInfoUsingGET1Request($chain_id, $contract_addresses, $authorization = null, $token_id = 'NFT token id')
    {
        // verify the required parameter 'chain_id' is set
        if ($chain_id === null || (is_array($chain_id) && count($chain_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chain_id when calling getNftInfoUsingGET1'
            );
        }
        // verify the required parameter 'contract_addresses' is set
        if ($contract_addresses === null || (is_array($contract_addresses) && count($contract_addresses) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contract_addresses when calling getNftInfoUsingGET1'
            );
        }

        $resourcePath = '/api/v1/nft_security/{chain_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($contract_addresses !== null) {
            $queryParams['contract_addresses'] = ObjectSerializer::toQueryValue($contract_addresses, null);
        }
        // query params
        if ($token_id !== null) {
            $queryParams['token_id'] = ObjectSerializer::toQueryValue($token_id, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($chain_id !== null) {
            $resourcePath = str_replace(
                '{' . 'chain_id' . '}',
                ObjectSerializer::toPathValue($chain_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
