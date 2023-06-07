<?php
/**
 * ApproveControllerV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GoPlus Security API Document
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
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
 * ApproveControllerV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApproveControllerV1Api
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
     * Operation addressContractUsingGET1
     *
     * Check if the address is malicious
     *
     * @param  string $address address (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     * @param  string $chain_id The chain_id of the blockchain. \&quot;1\&quot; means Ethereum;  \&quot;10\&quot; means Optimism; “25” means Cronos; \&quot;56\&quot; means BSC;  “66” means OKC; \&quot;100\&quot; means Gnosis; \&quot;128\&quot; means HECO;  \&quot;137\&quot; means Polygon;  \&quot;250\&quot; means Fantom; \&quot;321\&quot; means KCC; \&quot;324\&quot; means zkSync Era; \&quot;10001\&quot; means ETHW; \&quot;201022\&quot; means FON; \&quot;42161\&quot; means Arbitrum;  \&quot;43114\&quot; means Avalanche; \&quot;59140\&quot; means Linea; \&quot;1666600000\&quot; means Harmony; \&quot;tron\&quot; means Tron. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ResponseWrapperAddressContract_
     */
    public function addressContractUsingGET1($address, $authorization = null, $chain_id = null)
    {
        list($response) = $this->addressContractUsingGET1WithHttpInfo($address, $authorization, $chain_id);
        return $response;
    }

    /**
     * Operation addressContractUsingGET1WithHttpInfo
     *
     * Check if the address is malicious
     *
     * @param  string $address address (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     * @param  string $chain_id The chain_id of the blockchain. \&quot;1\&quot; means Ethereum;  \&quot;10\&quot; means Optimism; “25” means Cronos; \&quot;56\&quot; means BSC;  “66” means OKC; \&quot;100\&quot; means Gnosis; \&quot;128\&quot; means HECO;  \&quot;137\&quot; means Polygon;  \&quot;250\&quot; means Fantom; \&quot;321\&quot; means KCC; \&quot;324\&quot; means zkSync Era; \&quot;10001\&quot; means ETHW; \&quot;201022\&quot; means FON; \&quot;42161\&quot; means Arbitrum;  \&quot;43114\&quot; means Avalanche; \&quot;59140\&quot; means Linea; \&quot;1666600000\&quot; means Harmony; \&quot;tron\&quot; means Tron. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ResponseWrapperAddressContract_, HTTP status code, HTTP response headers (array of strings)
     */
    public function addressContractUsingGET1WithHttpInfo($address, $authorization = null, $chain_id = null)
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperAddressContract_';
        $request = $this->addressContractUsingGET1Request($address, $authorization, $chain_id);

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
                        '\Swagger\Client\Model\ResponseWrapperAddressContract_',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addressContractUsingGET1Async
     *
     * Check if the address is malicious
     *
     * @param  string $address address (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     * @param  string $chain_id The chain_id of the blockchain. \&quot;1\&quot; means Ethereum;  \&quot;10\&quot; means Optimism; “25” means Cronos; \&quot;56\&quot; means BSC;  “66” means OKC; \&quot;100\&quot; means Gnosis; \&quot;128\&quot; means HECO;  \&quot;137\&quot; means Polygon;  \&quot;250\&quot; means Fantom; \&quot;321\&quot; means KCC; \&quot;324\&quot; means zkSync Era; \&quot;10001\&quot; means ETHW; \&quot;201022\&quot; means FON; \&quot;42161\&quot; means Arbitrum;  \&quot;43114\&quot; means Avalanche; \&quot;59140\&quot; means Linea; \&quot;1666600000\&quot; means Harmony; \&quot;tron\&quot; means Tron. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addressContractUsingGET1Async($address, $authorization = null, $chain_id = null)
    {
        return $this->addressContractUsingGET1AsyncWithHttpInfo($address, $authorization, $chain_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addressContractUsingGET1AsyncWithHttpInfo
     *
     * Check if the address is malicious
     *
     * @param  string $address address (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     * @param  string $chain_id The chain_id of the blockchain. \&quot;1\&quot; means Ethereum;  \&quot;10\&quot; means Optimism; “25” means Cronos; \&quot;56\&quot; means BSC;  “66” means OKC; \&quot;100\&quot; means Gnosis; \&quot;128\&quot; means HECO;  \&quot;137\&quot; means Polygon;  \&quot;250\&quot; means Fantom; \&quot;321\&quot; means KCC; \&quot;324\&quot; means zkSync Era; \&quot;10001\&quot; means ETHW; \&quot;201022\&quot; means FON; \&quot;42161\&quot; means Arbitrum;  \&quot;43114\&quot; means Avalanche; \&quot;59140\&quot; means Linea; \&quot;1666600000\&quot; means Harmony; \&quot;tron\&quot; means Tron. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addressContractUsingGET1AsyncWithHttpInfo($address, $authorization = null, $chain_id = null)
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperAddressContract_';
        $request = $this->addressContractUsingGET1Request($address, $authorization, $chain_id);

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
     * Create request for operation 'addressContractUsingGET1'
     *
     * @param  string $address address (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     * @param  string $chain_id The chain_id of the blockchain. \&quot;1\&quot; means Ethereum;  \&quot;10\&quot; means Optimism; “25” means Cronos; \&quot;56\&quot; means BSC;  “66” means OKC; \&quot;100\&quot; means Gnosis; \&quot;128\&quot; means HECO;  \&quot;137\&quot; means Polygon;  \&quot;250\&quot; means Fantom; \&quot;321\&quot; means KCC; \&quot;324\&quot; means zkSync Era; \&quot;10001\&quot; means ETHW; \&quot;201022\&quot; means FON; \&quot;42161\&quot; means Arbitrum;  \&quot;43114\&quot; means Avalanche; \&quot;59140\&quot; means Linea; \&quot;1666600000\&quot; means Harmony; \&quot;tron\&quot; means Tron. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addressContractUsingGET1Request($address, $authorization = null, $chain_id = null)
    {
        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling addressContractUsingGET1'
            );
        }

        $resourcePath = '/api/v1/address_security/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($chain_id !== null) {
            $queryParams['chain_id'] = ObjectSerializer::toQueryValue($chain_id, null);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation approvalContractUsingGET
     *
     * Check if the approval is secure
     *
     * @param  string $chain_id Chain id, (ETH: 1,  BSC: 56, OKC: 66, Heco: 128, Polygon: 137, Fantom:250, Arbitrum: 42161, Avalanche: 43114) (required)
     * @param  string $contract_addresses Contract needs to be detected (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ResponseWrapperContractApproveResponse_
     */
    public function approvalContractUsingGET($chain_id, $contract_addresses, $authorization = null)
    {
        list($response) = $this->approvalContractUsingGETWithHttpInfo($chain_id, $contract_addresses, $authorization);
        return $response;
    }

    /**
     * Operation approvalContractUsingGETWithHttpInfo
     *
     * Check if the approval is secure
     *
     * @param  string $chain_id Chain id, (ETH: 1,  BSC: 56, OKC: 66, Heco: 128, Polygon: 137, Fantom:250, Arbitrum: 42161, Avalanche: 43114) (required)
     * @param  string $contract_addresses Contract needs to be detected (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ResponseWrapperContractApproveResponse_, HTTP status code, HTTP response headers (array of strings)
     */
    public function approvalContractUsingGETWithHttpInfo($chain_id, $contract_addresses, $authorization = null)
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperContractApproveResponse_';
        $request = $this->approvalContractUsingGETRequest($chain_id, $contract_addresses, $authorization);

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
                        '\Swagger\Client\Model\ResponseWrapperContractApproveResponse_',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation approvalContractUsingGETAsync
     *
     * Check if the approval is secure
     *
     * @param  string $chain_id Chain id, (ETH: 1,  BSC: 56, OKC: 66, Heco: 128, Polygon: 137, Fantom:250, Arbitrum: 42161, Avalanche: 43114) (required)
     * @param  string $contract_addresses Contract needs to be detected (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function approvalContractUsingGETAsync($chain_id, $contract_addresses, $authorization = null)
    {
        return $this->approvalContractUsingGETAsyncWithHttpInfo($chain_id, $contract_addresses, $authorization)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation approvalContractUsingGETAsyncWithHttpInfo
     *
     * Check if the approval is secure
     *
     * @param  string $chain_id Chain id, (ETH: 1,  BSC: 56, OKC: 66, Heco: 128, Polygon: 137, Fantom:250, Arbitrum: 42161, Avalanche: 43114) (required)
     * @param  string $contract_addresses Contract needs to be detected (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function approvalContractUsingGETAsyncWithHttpInfo($chain_id, $contract_addresses, $authorization = null)
    {
        $returnType = '\Swagger\Client\Model\ResponseWrapperContractApproveResponse_';
        $request = $this->approvalContractUsingGETRequest($chain_id, $contract_addresses, $authorization);

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
     * Create request for operation 'approvalContractUsingGET'
     *
     * @param  string $chain_id Chain id, (ETH: 1,  BSC: 56, OKC: 66, Heco: 128, Polygon: 137, Fantom:250, Arbitrum: 42161, Avalanche: 43114) (required)
     * @param  string $contract_addresses Contract needs to be detected (required)
     * @param  string $authorization Authorization (test：Bearer 81|9ihH8JzEuFu4MQ9DjWmH5WrNCPW...) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function approvalContractUsingGETRequest($chain_id, $contract_addresses, $authorization = null)
    {
        // verify the required parameter 'chain_id' is set
        if ($chain_id === null || (is_array($chain_id) && count($chain_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chain_id when calling approvalContractUsingGET'
            );
        }
        // verify the required parameter 'contract_addresses' is set
        if ($contract_addresses === null || (is_array($contract_addresses) && count($contract_addresses) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contract_addresses when calling approvalContractUsingGET'
            );
        }

        $resourcePath = '/api/v1/approval_security/{chain_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($contract_addresses !== null) {
            $queryParams['contract_addresses'] = ObjectSerializer::toQueryValue($contract_addresses, null);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
