<?php
/**
 * AbiAddressInfo
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
 * AbiAddressInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbiAddressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AbiAddressInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_name' => 'string',
'is_contract' => 'int',
'malicious_address' => 'int',
'name' => 'string',
'standard' => 'string',
'symbol' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_name' => null,
'is_contract' => 'int32',
'malicious_address' => 'int32',
'name' => null,
'standard' => null,
'symbol' => null    ];

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
        'contract_name' => 'contract_name',
'is_contract' => 'is_contract',
'malicious_address' => 'malicious_address',
'name' => 'name',
'standard' => 'standard',
'symbol' => 'symbol'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_name' => 'setContractName',
'is_contract' => 'setIsContract',
'malicious_address' => 'setMaliciousAddress',
'name' => 'setName',
'standard' => 'setStandard',
'symbol' => 'setSymbol'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_name' => 'getContractName',
'is_contract' => 'getIsContract',
'malicious_address' => 'getMaliciousAddress',
'name' => 'getName',
'standard' => 'getStandard',
'symbol' => 'getSymbol'    ];

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
        $this->container['contract_name'] = isset($data['contract_name']) ? $data['contract_name'] : null;
        $this->container['is_contract'] = isset($data['is_contract']) ? $data['is_contract'] : null;
        $this->container['malicious_address'] = isset($data['malicious_address']) ? $data['malicious_address'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
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
     * @param string $contract_name It describes the contract name if the address is a contract.
     *
     * @return $this
     */
    public function setContractName($contract_name)
    {
        $this->container['contract_name'] = $contract_name;

        return $this;
    }

    /**
     * Gets is_contract
     *
     * @return int
     */
    public function getIsContract()
    {
        return $this->container['is_contract'];
    }

    /**
     * Sets is_contract
     *
     * @param int $is_contract It describes whether the address is a contract. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setIsContract($is_contract)
    {
        $this->container['is_contract'] = $is_contract;

        return $this;
    }

    /**
     * Gets malicious_address
     *
     * @return int
     */
    public function getMaliciousAddress()
    {
        return $this->container['malicious_address'];
    }

    /**
     * Sets malicious_address
     *
     * @param int $malicious_address It describes whether the address is a suspected malicious contract.\"1\" means true; \"0\" means that we have not found malicious behavior of this address.
     *
     * @return $this
     */
    public function setMaliciousAddress($malicious_address)
    {
        $this->container['malicious_address'] = $malicious_address;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name It describes the token name if the address is an ERC20 contract.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets standard
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string $standard It describes the standard type of the contract.Example:\"erc20\".
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol It describes the token symbol if the address is an ERC20 contract.
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

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
