<?php
/**
 * ParseAbiDataRequest
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
 * ParseAbiDataRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParseAbiDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParseAbiDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chain_id' => 'string',
'contract_address' => 'string',
'data' => 'string',
'input' => 'map[string,object]',
'signer' => 'string',
'transcation_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chain_id' => null,
'contract_address' => null,
'data' => null,
'input' => null,
'signer' => null,
'transcation_type' => null    ];

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
        'chain_id' => 'chain_id',
'contract_address' => 'contract_address',
'data' => 'data',
'input' => 'input',
'signer' => 'signer',
'transcation_type' => 'transcation_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chain_id' => 'setChainId',
'contract_address' => 'setContractAddress',
'data' => 'setData',
'input' => 'setInput',
'signer' => 'setSigner',
'transcation_type' => 'setTranscationType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chain_id' => 'getChainId',
'contract_address' => 'getContractAddress',
'data' => 'getData',
'input' => 'getInput',
'signer' => 'getSigner',
'transcation_type' => 'getTranscationType'    ];

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

    const TRANSCATION_TYPE_COMMON = 'common';
const TRANSCATION_TYPE_ETH_SIGN_TYPED_DATA_V4 = 'eth_signTypedData_v4';
const TRANSCATION_TYPE_PERSONAL_SIGN = 'personal_sign';
const TRANSCATION_TYPE_ETH_SIGN = 'eth_sign';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTranscationTypeAllowableValues()
    {
        return [
            self::TRANSCATION_TYPE_COMMON,
self::TRANSCATION_TYPE_ETH_SIGN_TYPED_DATA_V4,
self::TRANSCATION_TYPE_PERSONAL_SIGN,
self::TRANSCATION_TYPE_ETH_SIGN,        ];
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
        $this->container['chain_id'] = isset($data['chain_id']) ? $data['chain_id'] : null;
        $this->container['contract_address'] = isset($data['contract_address']) ? $data['contract_address'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['signer'] = isset($data['signer']) ? $data['signer'] : null;
        $this->container['transcation_type'] = isset($data['transcation_type']) ? $data['transcation_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chain_id'] === null) {
            $invalidProperties[] = "'chain_id' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        $allowedValues = $this->getTranscationTypeAllowableValues();
        if (!is_null($this->container['transcation_type']) && !in_array($this->container['transcation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transcation_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets chain_id
     *
     * @return string
     */
    public function getChainId()
    {
        return $this->container['chain_id'];
    }

    /**
     * Sets chain_id
     *
     * @param string $chain_id Chain id, (ETH: 1, Cronos:25, BSC: 56, Heco: 128, Polygon: 137, Fantom:250, KCC: 321, Arbitrum: 42161, Avalanche: 43114)
     *
     * @return $this
     */
    public function setChainId($chain_id)
    {
        $this->container['chain_id'] = $chain_id;

        return $this;
    }

    /**
     * Gets contract_address
     *
     * @return string
     */
    public function getContractAddress()
    {
        return $this->container['contract_address'];
    }

    /**
     * Sets contract_address
     *
     * @param string $contract_address Carrying the signer and contract address will help to decode more information.
     *
     * @return $this
     */
    public function setContractAddress($contract_address)
    {
        $this->container['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data Transaction input
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets input
     *
     * @return map[string,object]
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param map[string,object] $input input info
     *
     * @return $this
     */
    public function setInput($input)
    {
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string $signer Carrying the signer and contract address will help to decode more information.
     *
     * @return $this
     */
    public function setSigner($signer)
    {
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets transcation_type
     *
     * @return string
     */
    public function getTranscationType()
    {
        return $this->container['transcation_type'];
    }

    /**
     * Sets transcation_type
     *
     * @param string $transcation_type Transaction type
     *
     * @return $this
     */
    public function setTranscationType($transcation_type)
    {
        $allowedValues = $this->getTranscationTypeAllowableValues();
        if (!is_null($transcation_type) && !in_array($transcation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transcation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transcation_type'] = $transcation_type;

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