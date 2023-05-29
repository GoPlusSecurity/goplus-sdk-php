<?php
/**
 * ResponseWrapperGetNftInfoResultTransferWithoutApproval
 *
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
 * ResponseWrapperGetNftInfoResultTransferWithoutApproval Class Doc Comment
 *
 * @category Class
 * @description It describes whether the NFT owner can transfer NFT without approval.(Notice:Transfer_without_approval generally means the scammer does not need to get approvals to transfer another address&#x27;s NFT. One typical example is sleep_minting. Sleep_minting means that the scammer will first add the NFT to a well-known wallet address and then retrieve the NFT. After the value of the NFT has appreciated , it will be put back on the market.)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperGetNftInfoResultTransferWithoutApproval implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperGetNftInfo_result_transfer_without_approval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner_address' => 'string',
'value' => 'int',
'owner_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner_address' => null,
'value' => 'int32',
'owner_type' => null    ];

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
        'owner_address' => 'owner_address',
'value' => 'value',
'owner_type' => 'owner_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_address' => 'setOwnerAddress',
'value' => 'setValue',
'owner_type' => 'setOwnerType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_address' => 'getOwnerAddress',
'value' => 'getValue',
'owner_type' => 'getOwnerType'    ];

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
        $this->container['owner_address'] = isset($data['owner_address']) ? $data['owner_address'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['owner_type'] = isset($data['owner_type']) ? $data['owner_type'] : null;
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
     * Gets owner_address
     *
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->container['owner_address'];
    }

    /**
     * Sets owner_address
     *
     * @param string $owner_address Owner_address describes the owner address.  null: the owner address cannot be fetched.
     *
     * @return $this
     */
    public function setOwnerAddress($owner_address)
    {
        $this->container['owner_address'] = $owner_address;

        return $this;
    }

    /**
     * Gets value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int $value The \"value\" describes the status of the risk. null: the contract is not open source or there is a proxy, it is not possible to detect whether the risk exists. -1: the risk is detected but the ownership give up. If the detection of a code vulnerability, it can also be considered risk-free.  0: the risk is not detected.  1: the risk is detected, and the owner address is a common address (EOA), then it can be said that there is a clear risk.  2: The risk is detected, but the owner address is a contract address, the risk is not significant.  3: The risk is detected, but the owner address is not detectable / or an array.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets owner_type
     *
     * @return string
     */
    public function getOwnerType()
    {
        return $this->container['owner_type'];
    }

    /**
     * Sets owner_type
     *
     * @param string $owner_type \"blackhole\" : the owner is a blackhole address. \"contract\" : the owner is a contract. \"eoa\" : the owner is a common address (eoa). \"multi-address\": the owner is an array/list. null: the address is not detected.
     *
     * @return $this
     */
    public function setOwnerType($owner_type)
    {
        $this->container['owner_type'] = $owner_type;

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
