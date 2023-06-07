<?php
/**
 * ApproveAddressInfo
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
 * ApproveAddressInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApproveAddressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApproveAddressInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_name' => 'string',
        'creator_address' => 'string',
        'deployed_time' => 'int',
        'doubt_list' => 'int',
        'is_contract' => 'int',
        'is_open_source' => 'int',
        'malicious_behavior' => 'string[]',
        'tag' => 'string',
        'trust_list' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_name' => null,
        'creator_address' => null,
        'deployed_time' => 'int64',
        'doubt_list' => 'int32',
        'is_contract' => 'int32',
        'is_open_source' => 'int32',
        'malicious_behavior' => null,
        'tag' => null,
        'trust_list' => 'int32'
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
        'contract_name' => 'contract_name',
        'creator_address' => 'creator_address',
        'deployed_time' => 'deployed_time',
        'doubt_list' => 'doubt_list',
        'is_contract' => 'is_contract',
        'is_open_source' => 'is_open_source',
        'malicious_behavior' => 'malicious_behavior',
        'tag' => 'tag',
        'trust_list' => 'trust_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_name' => 'setContractName',
        'creator_address' => 'setCreatorAddress',
        'deployed_time' => 'setDeployedTime',
        'doubt_list' => 'setDoubtList',
        'is_contract' => 'setIsContract',
        'is_open_source' => 'setIsOpenSource',
        'malicious_behavior' => 'setMaliciousBehavior',
        'tag' => 'setTag',
        'trust_list' => 'setTrustList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_name' => 'getContractName',
        'creator_address' => 'getCreatorAddress',
        'deployed_time' => 'getDeployedTime',
        'doubt_list' => 'getDoubtList',
        'is_contract' => 'getIsContract',
        'is_open_source' => 'getIsOpenSource',
        'malicious_behavior' => 'getMaliciousBehavior',
        'tag' => 'getTag',
        'trust_list' => 'getTrustList'
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
        $this->container['contract_name'] = isset($data['contract_name']) ? $data['contract_name'] : null;
        $this->container['creator_address'] = isset($data['creator_address']) ? $data['creator_address'] : null;
        $this->container['deployed_time'] = isset($data['deployed_time']) ? $data['deployed_time'] : null;
        $this->container['doubt_list'] = isset($data['doubt_list']) ? $data['doubt_list'] : null;
        $this->container['is_contract'] = isset($data['is_contract']) ? $data['is_contract'] : null;
        $this->container['is_open_source'] = isset($data['is_open_source']) ? $data['is_open_source'] : null;
        $this->container['malicious_behavior'] = isset($data['malicious_behavior']) ? $data['malicious_behavior'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['trust_list'] = isset($data['trust_list']) ? $data['trust_list'] : null;
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
     * @param string $contract_name Spender name
     *
     * @return $this
     */
    public function setContractName($contract_name)
    {
        $this->container['contract_name'] = $contract_name;

        return $this;
    }

    /**
     * Gets creator_address
     *
     * @return string
     */
    public function getCreatorAddress()
    {
        return $this->container['creator_address'];
    }

    /**
     * Sets creator_address
     *
     * @param string $creator_address Spender's deployer
     *
     * @return $this
     */
    public function setCreatorAddress($creator_address)
    {
        $this->container['creator_address'] = $creator_address;

        return $this;
    }

    /**
     * Gets deployed_time
     *
     * @return int
     */
    public function getDeployedTime()
    {
        return $this->container['deployed_time'];
    }

    /**
     * Sets deployed_time
     *
     * @param int $deployed_time Spender's deployed time
     *
     * @return $this
     */
    public function setDeployedTime($deployed_time)
    {
        $this->container['deployed_time'] = $deployed_time;

        return $this;
    }

    /**
     * Gets doubt_list
     *
     * @return int
     */
    public function getDoubtList()
    {
        return $this->container['doubt_list'];
    }

    /**
     * Sets doubt_list
     *
     * @param int $doubt_list Whether the spender has a history of malicious behavior or contains high risk.
     *
     * @return $this
     */
    public function setDoubtList($doubt_list)
    {
        $this->container['doubt_list'] = $doubt_list;

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
     * @param int $is_contract Whether the spender is a contract.
     *
     * @return $this
     */
    public function setIsContract($is_contract)
    {
        $this->container['is_contract'] = $is_contract;

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
     * @param int $is_open_source Whether the spender is verified on blockchain explorer.
     *
     * @return $this
     */
    public function setIsOpenSource($is_open_source)
    {
        $this->container['is_open_source'] = $is_open_source;

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
     * @param string[] $malicious_behavior Specific malicious behaviors or risks of this spender.
     *
     * @return $this
     */
    public function setMaliciousBehavior($malicious_behavior)
    {
        $this->container['malicious_behavior'] = $malicious_behavior;

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
     * @param string $tag Spender tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets trust_list
     *
     * @return int
     */
    public function getTrustList()
    {
        return $this->container['trust_list'];
    }

    /**
     * Sets trust_list
     *
     * @param int $trust_list Whether the spender is on the whitelist, and can be trusted
     *
     * @return $this
     */
    public function setTrustList($trust_list)
    {
        $this->container['trust_list'] = $trust_list;

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
