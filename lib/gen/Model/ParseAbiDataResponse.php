<?php
/**
 * ParseAbiDataResponse
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ParseAbiDataResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParseAbiDataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParseAbiDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_description' => 'string',
'contract_name' => 'string',
'malicious_contract' => 'int',
'method' => 'string',
'params' => '\Swagger\Client\Model\AbiParamInfo[]',
'risk' => 'string',
'risky_signature' => 'int',
'signature_detail' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_description' => null,
'contract_name' => null,
'malicious_contract' => 'int32',
'method' => null,
'params' => null,
'risk' => null,
'risky_signature' => 'int32',
'signature_detail' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'contract_description' => 'contract_description',
'contract_name' => 'contract_name',
'malicious_contract' => 'malicious_contract',
'method' => 'method',
'params' => 'params',
'risk' => 'risk',
'risky_signature' => 'risky_signature',
'signature_detail' => 'signature_detail'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_description' => 'setContractDescription',
'contract_name' => 'setContractName',
'malicious_contract' => 'setMaliciousContract',
'method' => 'setMethod',
'params' => 'setParams',
'risk' => 'setRisk',
'risky_signature' => 'setRiskySignature',
'signature_detail' => 'setSignatureDetail'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_description' => 'getContractDescription',
'contract_name' => 'getContractName',
'malicious_contract' => 'getMaliciousContract',
'method' => 'getMethod',
'params' => 'getParams',
'risk' => 'getRisk',
'risky_signature' => 'getRiskySignature',
'signature_detail' => 'getSignatureDetail'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['contract_description'] = isset($data['contract_description']) ? $data['contract_description'] : null;
        $this->container['contract_name'] = isset($data['contract_name']) ? $data['contract_name'] : null;
        $this->container['malicious_contract'] = isset($data['malicious_contract']) ? $data['malicious_contract'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['risky_signature'] = isset($data['risky_signature']) ? $data['risky_signature'] : null;
        $this->container['signature_detail'] = isset($data['signature_detail']) ? $data['signature_detail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets contract_description
     *
     * @return string
     */
    public function getContractDescription()
    {
        return $this->container['contract_description'];
    }

    /**
     * Sets contract_description
     *
     * @param string $contract_description Description of the contract.
     *
     * @return $this
     */
    public function setContractDescription($contract_description)
    {
        $this->container['contract_description'] = $contract_description;

        return $this;
    }

    /**
     * Gets contract_name
     *
     * @return string
     */
    public function getContractName()
    {
        return $this->container['contract_name'];
    }

    /**
     * Sets contract_name
     *
     * @param string $contract_name The name of the contract that the user is interacting with.
     *
     * @return $this
     */
    public function setContractName($contract_name)
    {
        $this->container['contract_name'] = $contract_name;

        return $this;
    }

    /**
     * Gets malicious_contract
     *
     * @return int
     */
    public function getMaliciousContract()
    {
        return $this->container['malicious_contract'];
    }

    /**
     * Sets malicious_contract
     *
     * @param int $malicious_contract It tells if contract that the user is interacting with is malicious contract.
     *
     * @return $this
     */
    public function setMaliciousContract($malicious_contract)
    {
        $this->container['malicious_contract'] = $malicious_contract;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method It describes the method name in ABI, for example \"transfer\".
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets params
     *
     * @return \Swagger\Client\Model\AbiParamInfo[]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param \Swagger\Client\Model\AbiParamInfo[] $params It describes the parameter info
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return string
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param string $risk It explains why the transaction that users are signing contains risk.(Notice:Even non-malicious, commonly used, well-known contracts can be highly risky if not used properly.)
     *
     * @return $this
     */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets risky_signature
     *
     * @return int
     */
    public function getRiskySignature()
    {
        return $this->container['risky_signature'];
    }

    /**
     * Sets risky_signature
     *
     * @param int $risky_signature It tells if the transaction that users are signing contains risk.(Notice:Even non-malicious, commonly used, well-known contracts can be highly risky if not used properly.)
     *
     * @return $this
     */
    public function setRiskySignature($risky_signature)
    {
        $this->container['risky_signature'] = $risky_signature;

        return $this;
    }

    /**
     * Gets signature_detail
     *
     * @return string
     */
    public function getSignatureDetail()
    {
        return $this->container['signature_detail'];
    }

    /**
     * Sets signature_detail
     *
     * @param string $signature_detail It explain the function of the method
     *
     * @return $this
     */
    public function setSignatureDetail($signature_detail)
    {
        $this->container['signature_detail'] = $signature_detail;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
