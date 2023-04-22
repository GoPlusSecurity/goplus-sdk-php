<?php
/**
 * ApproveNFT1155ListResponse
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
 * ApproveNFT1155ListResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApproveNFT1155ListResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApproveNFT1155ListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approved_list' => '\Swagger\Client\Model\ApproveErc1155Result[]',
'chain_id' => 'string',
'is_open_source' => 'int',
'is_verified' => 'int',
'malicious_address' => 'int',
'malicious_behavior' => 'string[]',
'nft_address' => 'string',
'nft_name' => 'string',
'nft_symbol' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approved_list' => null,
'chain_id' => null,
'is_open_source' => 'int32',
'is_verified' => 'int32',
'malicious_address' => 'int32',
'malicious_behavior' => null,
'nft_address' => null,
'nft_name' => null,
'nft_symbol' => null    ];

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
'chain_id' => 'chain_id',
'is_open_source' => 'is_open_source',
'is_verified' => 'is_verified',
'malicious_address' => 'malicious_address',
'malicious_behavior' => 'malicious_behavior',
'nft_address' => 'nft_address',
'nft_name' => 'nft_name',
'nft_symbol' => 'nft_symbol'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approved_list' => 'setApprovedList',
'chain_id' => 'setChainId',
'is_open_source' => 'setIsOpenSource',
'is_verified' => 'setIsVerified',
'malicious_address' => 'setMaliciousAddress',
'malicious_behavior' => 'setMaliciousBehavior',
'nft_address' => 'setNftAddress',
'nft_name' => 'setNftName',
'nft_symbol' => 'setNftSymbol'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approved_list' => 'getApprovedList',
'chain_id' => 'getChainId',
'is_open_source' => 'getIsOpenSource',
'is_verified' => 'getIsVerified',
'malicious_address' => 'getMaliciousAddress',
'malicious_behavior' => 'getMaliciousBehavior',
'nft_address' => 'getNftAddress',
'nft_name' => 'getNftName',
'nft_symbol' => 'getNftSymbol'    ];

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
        $this->container['chain_id'] = isset($data['chain_id']) ? $data['chain_id'] : null;
        $this->container['is_open_source'] = isset($data['is_open_source']) ? $data['is_open_source'] : null;
        $this->container['is_verified'] = isset($data['is_verified']) ? $data['is_verified'] : null;
        $this->container['malicious_address'] = isset($data['malicious_address']) ? $data['malicious_address'] : null;
        $this->container['malicious_behavior'] = isset($data['malicious_behavior']) ? $data['malicious_behavior'] : null;
        $this->container['nft_address'] = isset($data['nft_address']) ? $data['nft_address'] : null;
        $this->container['nft_name'] = isset($data['nft_name']) ? $data['nft_name'] : null;
        $this->container['nft_symbol'] = isset($data['nft_symbol']) ? $data['nft_symbol'] : null;
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
     * @return \Swagger\Client\Model\ApproveErc1155Result[]
     */
    public function getApprovedList()
    {
        return $this->container['approved_list'];
    }

    /**
     * Sets approved_list
     *
     * @param \Swagger\Client\Model\ApproveErc1155Result[] $approved_list approved_list
     *
     * @return $this
     */
    public function setApprovedList($approved_list)
    {
        $this->container['approved_list'] = $approved_list;

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
     * Gets is_verified
     *
     * @return int
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     *
     * @param int $is_verified Whether NFT is certified on a reputable trading platform.
     *
     * @return $this
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

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
     * @param int $malicious_address Whether the NFT is malicious or contains high risk.
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
     * @param string[] $malicious_behavior Specific malicious behaviors or risks of this NFT.
     *
     * @return $this
     */
    public function setMaliciousBehavior($malicious_behavior)
    {
        $this->container['malicious_behavior'] = $malicious_behavior;

        return $this;
    }

    /**
     * Gets nft_address
     *
     * @return string
     */
    public function getNftAddress()
    {
        return $this->container['nft_address'];
    }

    /**
     * Sets nft_address
     *
     * @param string $nft_address NFT address
     *
     * @return $this
     */
    public function setNftAddress($nft_address)
    {
        $this->container['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Gets nft_name
     *
     * @return string
     */
    public function getNftName()
    {
        return $this->container['nft_name'];
    }

    /**
     * Sets nft_name
     *
     * @param string $nft_name NFT name
     *
     * @return $this
     */
    public function setNftName($nft_name)
    {
        $this->container['nft_name'] = $nft_name;

        return $this;
    }

    /**
     * Gets nft_symbol
     *
     * @return string
     */
    public function getNftSymbol()
    {
        return $this->container['nft_symbol'];
    }

    /**
     * Sets nft_symbol
     *
     * @param string $nft_symbol NFT symbol
     *
     * @return $this
     */
    public function setNftSymbol($nft_symbol)
    {
        $this->container['nft_symbol'] = $nft_symbol;

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