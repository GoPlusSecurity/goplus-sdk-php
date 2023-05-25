<?php
/**
 * ApproveErc1155Result
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
 * ApproveErc1155Result Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApproveErc1155Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApproveErc1155Result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_info' => '\Swagger\Client\Model\ApproveAddressInfo',
'approved_contract' => 'string',
'approved_time' => 'int',
'hash' => 'string',
'initial_approval_hash' => 'string',
'initial_approval_time' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_info' => null,
'approved_contract' => null,
'approved_time' => 'int64',
'hash' => null,
'initial_approval_hash' => null,
'initial_approval_time' => 'int64'    ];

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
        'address_info' => 'address_info',
'approved_contract' => 'approved_contract',
'approved_time' => 'approved_time',
'hash' => 'hash',
'initial_approval_hash' => 'initial_approval_hash',
'initial_approval_time' => 'initial_approval_time'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_info' => 'setAddressInfo',
'approved_contract' => 'setApprovedContract',
'approved_time' => 'setApprovedTime',
'hash' => 'setHash',
'initial_approval_hash' => 'setInitialApprovalHash',
'initial_approval_time' => 'setInitialApprovalTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_info' => 'getAddressInfo',
'approved_contract' => 'getApprovedContract',
'approved_time' => 'getApprovedTime',
'hash' => 'getHash',
'initial_approval_hash' => 'getInitialApprovalHash',
'initial_approval_time' => 'getInitialApprovalTime'    ];

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
        $this->container['address_info'] = isset($data['address_info']) ? $data['address_info'] : null;
        $this->container['approved_contract'] = isset($data['approved_contract']) ? $data['approved_contract'] : null;
        $this->container['approved_time'] = isset($data['approved_time']) ? $data['approved_time'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['initial_approval_hash'] = isset($data['initial_approval_hash']) ? $data['initial_approval_hash'] : null;
        $this->container['initial_approval_time'] = isset($data['initial_approval_time']) ? $data['initial_approval_time'] : null;
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
     * Gets address_info
     *
     * @return \Swagger\Client\Model\ApproveAddressInfo
     */
    public function getAddressInfo()
    {
        return $this->container['address_info'];
    }

    /**
     * Sets address_info
     *
     * @param \Swagger\Client\Model\ApproveAddressInfo $address_info address_info
     *
     * @return $this
     */
    public function setAddressInfo($address_info)
    {
        $this->container['address_info'] = $address_info;

        return $this;
    }

    /**
     * Gets approved_contract
     *
     * @return string
     */
    public function getApprovedContract()
    {
        return $this->container['approved_contract'];
    }

    /**
     * Sets approved_contract
     *
     * @param string $approved_contract Spender Address
     *
     * @return $this
     */
    public function setApprovedContract($approved_contract)
    {
        $this->container['approved_contract'] = $approved_contract;

        return $this;
    }

    /**
     * Gets approved_time
     *
     * @return int
     */
    public function getApprovedTime()
    {
        return $this->container['approved_time'];
    }

    /**
     * Sets approved_time
     *
     * @param int $approved_time Latest approval time
     *
     * @return $this
     */
    public function setApprovedTime($approved_time)
    {
        $this->container['approved_time'] = $approved_time;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash Latest approval hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets initial_approval_hash
     *
     * @return string
     */
    public function getInitialApprovalHash()
    {
        return $this->container['initial_approval_hash'];
    }

    /**
     * Sets initial_approval_hash
     *
     * @param string $initial_approval_hash Initial approval hash
     *
     * @return $this
     */
    public function setInitialApprovalHash($initial_approval_hash)
    {
        $this->container['initial_approval_hash'] = $initial_approval_hash;

        return $this;
    }

    /**
     * Gets initial_approval_time
     *
     * @return int
     */
    public function getInitialApprovalTime()
    {
        return $this->container['initial_approval_time'];
    }

    /**
     * Sets initial_approval_time
     *
     * @param int $initial_approval_time Initial approval time
     *
     * @return $this
     */
    public function setInitialApprovalTime($initial_approval_time)
    {
        $this->container['initial_approval_time'] = $initial_approval_time;

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