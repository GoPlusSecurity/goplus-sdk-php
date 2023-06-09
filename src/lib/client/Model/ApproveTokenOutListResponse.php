<?php
/**
 * ApproveTokenOutListResponse
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
 * ApproveTokenOutListResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApproveTokenOutListResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApproveTokenOutListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approved_list' => '\Swagger\Client\Model\ApproveTokenResult[]',
        'balance' => 'string',
        'chain_id' => 'string',
        'decimals' => 'int',
        'is_open_source' => 'int',
        'malicious_address' => 'int',
        'malicious_behavior' => 'string[]',
        'token_address' => 'string',
        'token_name' => 'string',
        'token_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approved_list' => null,
        'balance' => null,
        'chain_id' => null,
        'decimals' => null,
        'is_open_source' => 'int32',
        'malicious_address' => 'int32',
        'malicious_behavior' => null,
        'token_address' => null,
        'token_name' => null,
        'token_symbol' => null
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
        'approved_list' => 'approved_list',
        'balance' => 'balance',
        'chain_id' => 'chain_id',
        'decimals' => 'decimals',
        'is_open_source' => 'is_open_source',
        'malicious_address' => 'malicious_address',
        'malicious_behavior' => 'malicious_behavior',
        'token_address' => 'token_address',
        'token_name' => 'token_name',
        'token_symbol' => 'token_symbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approved_list' => 'setApprovedList',
        'balance' => 'setBalance',
        'chain_id' => 'setChainId',
        'decimals' => 'setDecimals',
        'is_open_source' => 'setIsOpenSource',
        'malicious_address' => 'setMaliciousAddress',
        'malicious_behavior' => 'setMaliciousBehavior',
        'token_address' => 'setTokenAddress',
        'token_name' => 'setTokenName',
        'token_symbol' => 'setTokenSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approved_list' => 'getApprovedList',
        'balance' => 'getBalance',
        'chain_id' => 'getChainId',
        'decimals' => 'getDecimals',
        'is_open_source' => 'getIsOpenSource',
        'malicious_address' => 'getMaliciousAddress',
        'malicious_behavior' => 'getMaliciousBehavior',
        'token_address' => 'getTokenAddress',
        'token_name' => 'getTokenName',
        'token_symbol' => 'getTokenSymbol'
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
        $this->container['approved_list'] = isset($data['approved_list']) ? $data['approved_list'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['chain_id'] = isset($data['chain_id']) ? $data['chain_id'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['is_open_source'] = isset($data['is_open_source']) ? $data['is_open_source'] : null;
        $this->container['malicious_address'] = isset($data['malicious_address']) ? $data['malicious_address'] : null;
        $this->container['malicious_behavior'] = isset($data['malicious_behavior']) ? $data['malicious_behavior'] : null;
        $this->container['token_address'] = isset($data['token_address']) ? $data['token_address'] : null;
        $this->container['token_name'] = isset($data['token_name']) ? $data['token_name'] : null;
        $this->container['token_symbol'] = isset($data['token_symbol']) ? $data['token_symbol'] : null;
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
     * Gets approved_list
     *
     * @return \Swagger\Client\Model\ApproveTokenResult[]
     */
    public function getApprovedList()
    {
        return $this->container['approved_list'];
    }

    /**
     * Sets approved_list
     *
     * @param \Swagger\Client\Model\ApproveTokenResult[] $approved_list approved_list
     *
     * @return $this
     */
    public function setApprovedList($approved_list)
    {
        $this->container['approved_list'] = $approved_list;

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
     * @param string $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
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
     * @param string $chain_id ChainID
     *
     * @return $this
     */
    public function setChainId($chain_id)
    {
        $this->container['chain_id'] = $chain_id;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return int
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param int $decimals decimals
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets is_open_source
     *
     * @return int
     */
    public function getIsOpenSource()
    {
        return $this->container['is_open_source'];
    }

    /**
     * Sets is_open_source
     *
     * @param int $is_open_source Whether the contract is verified on blockchain explorer.
     *
     * @return $this
     */
    public function setIsOpenSource($is_open_source)
    {
        $this->container['is_open_source'] = $is_open_source;

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
     * @param int $malicious_address Whether the token is malicious or contains high risk.
     *
     * @return $this
     */
    public function setMaliciousAddress($malicious_address)
    {
        $this->container['malicious_address'] = $malicious_address;

        return $this;
    }

    /**
     * Gets malicious_behavior
     *
     * @return string[]
     */
    public function getMaliciousBehavior()
    {
        return $this->container['malicious_behavior'];
    }

    /**
     * Sets malicious_behavior
     *
     * @param string[] $malicious_behavior Specific malicious behaviors or risks of this token.
     *
     * @return $this
     */
    public function setMaliciousBehavior($malicious_behavior)
    {
        $this->container['malicious_behavior'] = $malicious_behavior;

        return $this;
    }

    /**
     * Gets token_address
     *
     * @return string
     */
    public function getTokenAddress()
    {
        return $this->container['token_address'];
    }

    /**
     * Sets token_address
     *
     * @param string $token_address Token address
     *
     * @return $this
     */
    public function setTokenAddress($token_address)
    {
        $this->container['token_address'] = $token_address;

        return $this;
    }

    /**
     * Gets token_name
     *
     * @return string
     */
    public function getTokenName()
    {
        return $this->container['token_name'];
    }

    /**
     * Sets token_name
     *
     * @param string $token_name Token name
     *
     * @return $this
     */
    public function setTokenName($token_name)
    {
        $this->container['token_name'] = $token_name;

        return $this;
    }

    /**
     * Gets token_symbol
     *
     * @return string
     */
    public function getTokenSymbol()
    {
        return $this->container['token_symbol'];
    }

    /**
     * Sets token_symbol
     *
     * @param string $token_symbol Token symbol
     *
     * @return $this
     */
    public function setTokenSymbol($token_symbol)
    {
        $this->container['token_symbol'] = $token_symbol;

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
