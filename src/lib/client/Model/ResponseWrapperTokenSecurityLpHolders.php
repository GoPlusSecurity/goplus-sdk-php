<?php
/**
 * ResponseWrapperTokenSecurityLpHolders
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
 * ResponseWrapperTokenSecurityLpHolders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperTokenSecurityLpHolders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperTokenSecurity_lp_holders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_locked' => 'int',
'is_contract' => 'int',
'address' => 'string',
'balance' => 'string',
'locked_detail' => 'string[]',
'tag' => 'string',
'percent' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_locked' => 'int32',
'is_contract' => 'int32',
'address' => null,
'balance' => null,
'locked_detail' => null,
'tag' => null,
'percent' => null    ];

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
        'is_locked' => 'is_locked',
'is_contract' => 'is_contract',
'address' => 'address',
'balance' => 'balance',
'locked_detail' => 'locked_detail',
'tag' => 'tag',
'percent' => 'percent'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_locked' => 'setIsLocked',
'is_contract' => 'setIsContract',
'address' => 'setAddress',
'balance' => 'setBalance',
'locked_detail' => 'setLockedDetail',
'tag' => 'setTag',
'percent' => 'setPercent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_locked' => 'getIsLocked',
'is_contract' => 'getIsContract',
'address' => 'getAddress',
'balance' => 'getBalance',
'locked_detail' => 'getLockedDetail',
'tag' => 'getTag',
'percent' => 'getPercent'    ];

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
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_contract'] = isset($data['is_contract']) ? $data['is_contract'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['locked_detail'] = isset($data['locked_detail']) ? $data['locked_detail'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
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
     * Gets is_locked
     *
     * @return int
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param int $is_locked It describes whether the tokens owned by the holder are locked \"1\" means true; \"0\" means false;  (3) “tag” describes the address's public tag. Example:Burn (Notice:About \"locked\": We only support the token lock addresses or black hole addresses that we have included. )
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

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
     * @param int $is_contract It describes whether the holder is a contract \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setIsContract($is_contract)
    {
        $this->container['is_contract'] = $is_contract;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address It describes the holder address;
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string $balance It describes the balance of the holder.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets locked_detail
     *
     * @return string[]
     */
    public function getLockedDetail()
    {
        return $this->container['locked_detail'];
    }

    /**
     * Sets locked_detail
     *
     * @param string[] $locked_detail It is an array, decribes lock position info of this holder, only shows when \"locked\": 1. This Array may contain multiple objects for multiple locking info. In every objetc, \"amount\" describes the number of token locked, \"end_time\" describes when the token will be unlocked, \"opt_time\" describes when the token was locked.(Notice:When \"locked\":0, or lock address is a black hole address,  \"locked_detail\" will be no return.)
     *
     * @return $this
     */
    public function setLockedDetail($locked_detail)
    {
        $this->container['locked_detail'] = $locked_detail;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag It describes the address's public tag. Example:Burn Address/Deployer;
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return string
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param string $percent It  describes the percentage of tokens held by this holder (Notice:About \"percent\": 1 means 100% here.)
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

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
