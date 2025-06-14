<?php
/**
 * ResponseWrapperSolanaTokenSecurityHolders
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
 * Swagger Codegen version: 3.0.45
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
 * ResponseWrapperSolanaTokenSecurityHolders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperSolanaTokenSecurityHolders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperSolanaTokenSecurity_holders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_locked' => 'int',
        'balance' => 'string',
        'locked_detail' => '\Swagger\Client\Model\ResponseWrapperSolanaTokenSecurityLockedDetail[]',
        'token_account' => 'string',
        'tag' => 'string',
        'percent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_locked' => 'int32',
        'balance' => null,
        'locked_detail' => null,
        'token_account' => null,
        'tag' => null,
        'percent' => null
    ];

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
        'balance' => 'balance',
        'locked_detail' => 'locked_detail',
        'token_account' => 'token_account',
        'tag' => 'tag',
        'percent' => 'percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_locked' => 'setIsLocked',
        'balance' => 'setBalance',
        'locked_detail' => 'setLockedDetail',
        'token_account' => 'setTokenAccount',
        'tag' => 'setTag',
        'percent' => 'setPercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_locked' => 'getIsLocked',
        'balance' => 'getBalance',
        'locked_detail' => 'getLockedDetail',
        'token_account' => 'getTokenAccount',
        'tag' => 'getTag',
        'percent' => 'getPercent'
    ];

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
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['locked_detail'] = isset($data['locked_detail']) ? $data['locked_detail'] : null;
        $this->container['token_account'] = isset($data['token_account']) ? $data['token_account'] : null;
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
     * @param int $is_locked It describes whether the tokens owned by the holder are locked \"1\" means true; \"0\" means false;  (3) 'tag' describes the address's public tag. Example:Burn (Notice:About \"locked\":We only support the token lock addresses or black hole addresses that we have included. )
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

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
     * @param string $balance Amount of tokens held.
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
     * @return \Swagger\Client\Model\ResponseWrapperSolanaTokenSecurityLockedDetail[]
     */
    public function getLockedDetail()
    {
        return $this->container['locked_detail'];
    }

    /**
     * Sets locked_detail
     *
     * @param \Swagger\Client\Model\ResponseWrapperSolanaTokenSecurityLockedDetail[] $locked_detail It is an array, decribes lock position info of this holder, only shows when \"locked\":1. This Array may contain multiple objects for multiple locking info. (Notice:When \"locked\":0, or lock address is a black hole address,  \"locked_detail\" will be no return.)
     *
     * @return $this
     */
    public function setLockedDetail($locked_detail)
    {
        $this->container['locked_detail'] = $locked_detail;

        return $this;
    }

    /**
     * Gets token_account
     *
     * @return string
     */
    public function getTokenAccount()
    {
        return $this->container['token_account'];
    }

    /**
     * Sets token_account
     *
     * @param string $token_account Address of the holder.
     *
     * @return $this
     */
    public function setTokenAccount($token_account)
    {
        $this->container['token_account'] = $token_account;

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
     * @param string $tag Tag information of the holder.
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
     * @param string $percent Percentage of total supply held.
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
