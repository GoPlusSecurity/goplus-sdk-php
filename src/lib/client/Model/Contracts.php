<?php
/**
 * Contracts
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
 * Contracts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contracts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Contracts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract_address' => 'string',
'creator_address' => 'string',
'deployment_time' => 'int',
'is_open_source' => 'int',
'malicious_behavior' => 'object[]',
'malicious_contract' => 'int',
'malicious_creator' => 'int',
'malicious_creator_behavior' => 'object[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract_address' => null,
'creator_address' => null,
'deployment_time' => 'int64',
'is_open_source' => 'int32',
'malicious_behavior' => null,
'malicious_contract' => 'int32',
'malicious_creator' => 'int32',
'malicious_creator_behavior' => null    ];

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
        'contract_address' => 'contract_address',
'creator_address' => 'creator_address',
'deployment_time' => 'deployment_time',
'is_open_source' => 'is_open_source',
'malicious_behavior' => 'malicious_behavior',
'malicious_contract' => 'malicious_contract',
'malicious_creator' => 'malicious_creator',
'malicious_creator_behavior' => 'malicious_creator_behavior'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_address' => 'setContractAddress',
'creator_address' => 'setCreatorAddress',
'deployment_time' => 'setDeploymentTime',
'is_open_source' => 'setIsOpenSource',
'malicious_behavior' => 'setMaliciousBehavior',
'malicious_contract' => 'setMaliciousContract',
'malicious_creator' => 'setMaliciousCreator',
'malicious_creator_behavior' => 'setMaliciousCreatorBehavior'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_address' => 'getContractAddress',
'creator_address' => 'getCreatorAddress',
'deployment_time' => 'getDeploymentTime',
'is_open_source' => 'getIsOpenSource',
'malicious_behavior' => 'getMaliciousBehavior',
'malicious_contract' => 'getMaliciousContract',
'malicious_creator' => 'getMaliciousCreator',
'malicious_creator_behavior' => 'getMaliciousCreatorBehavior'    ];

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
        $this->container['contract_address'] = isset($data['contract_address']) ? $data['contract_address'] : null;
        $this->container['creator_address'] = isset($data['creator_address']) ? $data['creator_address'] : null;
        $this->container['deployment_time'] = isset($data['deployment_time']) ? $data['deployment_time'] : null;
        $this->container['is_open_source'] = isset($data['is_open_source']) ? $data['is_open_source'] : null;
        $this->container['malicious_behavior'] = isset($data['malicious_behavior']) ? $data['malicious_behavior'] : null;
        $this->container['malicious_contract'] = isset($data['malicious_contract']) ? $data['malicious_contract'] : null;
        $this->container['malicious_creator'] = isset($data['malicious_creator']) ? $data['malicious_creator'] : null;
        $this->container['malicious_creator_behavior'] = isset($data['malicious_creator_behavior']) ? $data['malicious_creator_behavior'] : null;
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
     * @param string $contract_address It describes the dAap's contract address.
     *
     * @return $this
     */
    public function setContractAddress($contract_address)
    {
        $this->container['contract_address'] = $contract_address;

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
     * @param string $creator_address It describes the creator address of the contract.
     *
     * @return $this
     */
    public function setCreatorAddress($creator_address)
    {
        $this->container['creator_address'] = $creator_address;

        return $this;
    }

    /**
     * Gets deployment_time
     *
     * @return int
     */
    public function getDeploymentTime()
    {
        return $this->container['deployment_time'];
    }

    /**
     * Sets deployment_time
     *
     * @param int $deployment_time It describes the deployed time of the contract.The value is presented as a timestamp. Example: \"deployed_time\": 1626578345
     *
     * @return $this
     */
    public function setDeploymentTime($deployment_time)
    {
        $this->container['deployment_time'] = $deployment_time;

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
     * @param int $is_open_source It describes whether this contract is open source. \"1\" means true; \"0\" means false.
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
     * @return object[]
     */
    public function getMaliciousBehavior()
    {
        return $this->container['malicious_behavior'];
    }

    /**
     * Sets malicious_behavior
     *
     * @param object[] $malicious_behavior It describes specific malicious behaviors of the contract.
     *
     * @return $this
     */
    public function setMaliciousBehavior($malicious_behavior)
    {
        $this->container['malicious_behavior'] = $malicious_behavior;

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
     * @param int $malicious_contract It describes whether the address is a suspected malicious contract. \"1\" means true; \"0\" means that we have not found malicious behavior of this contract.(Notice:\"malicious_contract\" return \"0\" does not mean the address is completely safe. Maybe we just haven't found its malicious behavior.)
     *
     * @return $this
     */
    public function setMaliciousContract($malicious_contract)
    {
        $this->container['malicious_contract'] = $malicious_contract;

        return $this;
    }

    /**
     * Gets malicious_creator
     *
     * @return int
     */
    public function getMaliciousCreator()
    {
        return $this->container['malicious_creator'];
    }

    /**
     * Sets malicious_creator
     *
     * @param int $malicious_creator It describes whether the creator is a suspected malicious address. \"1\" means true; \"0\" means that we have not found malicious behavior of this address.(Notice:\"malicious_creator\" return \"0\" does not mean the address is completely safe. Maybe we just haven't found its malicious behavior.)
     *
     * @return $this
     */
    public function setMaliciousCreator($malicious_creator)
    {
        $this->container['malicious_creator'] = $malicious_creator;

        return $this;
    }

    /**
     * Gets malicious_creator_behavior
     *
     * @return object[]
     */
    public function getMaliciousCreatorBehavior()
    {
        return $this->container['malicious_creator_behavior'];
    }

    /**
     * Sets malicious_creator_behavior
     *
     * @param object[] $malicious_creator_behavior It describes specific malicious behaviors of the contract creator.
     *
     * @return $this
     */
    public function setMaliciousCreatorBehavior($malicious_creator_behavior)
    {
        $this->container['malicious_creator_behavior'] = $malicious_creator_behavior;

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