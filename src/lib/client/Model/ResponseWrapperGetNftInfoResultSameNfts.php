<?php
/**
 * ResponseWrapperGetNftInfoResultSameNfts
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
 * ResponseWrapperGetNftInfoResultSameNfts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperGetNftInfoResultSameNfts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperGetNftInfo_result_same_nfts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nft_address' => 'string',
        'nft_name' => 'string',
        'nft_owner_number' => 'int',
        'create_block_number' => 'int',
        'nft_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nft_address' => null,
        'nft_name' => null,
        'nft_owner_number' => 'int64',
        'create_block_number' => 'int64',
        'nft_symbol' => null
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
        'nft_address' => 'nft_address',
        'nft_name' => 'nft_name',
        'nft_owner_number' => 'nft_owner_number',
        'create_block_number' => 'create_block_number',
        'nft_symbol' => 'nft_symbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nft_address' => 'setNftAddress',
        'nft_name' => 'setNftName',
        'nft_owner_number' => 'setNftOwnerNumber',
        'create_block_number' => 'setCreateBlockNumber',
        'nft_symbol' => 'setNftSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nft_address' => 'getNftAddress',
        'nft_name' => 'getNftName',
        'nft_owner_number' => 'getNftOwnerNumber',
        'create_block_number' => 'getCreateBlockNumber',
        'nft_symbol' => 'getNftSymbol'
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
        $this->container['nft_address'] = isset($data['nft_address']) ? $data['nft_address'] : null;
        $this->container['nft_name'] = isset($data['nft_name']) ? $data['nft_name'] : null;
        $this->container['nft_owner_number'] = isset($data['nft_owner_number']) ? $data['nft_owner_number'] : null;
        $this->container['create_block_number'] = isset($data['create_block_number']) ? $data['create_block_number'] : null;
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
     * @param string $nft_address It describes the address of the NFTs;
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
     * @param string $nft_name It describes the name of the NFT;
     *
     * @return $this
     */
    public function setNftName($nft_name)
    {
        $this->container['nft_name'] = $nft_name;

        return $this;
    }

    /**
     * Gets nft_owner_number
     *
     * @return int
     */
    public function getNftOwnerNumber()
    {
        return $this->container['nft_owner_number'];
    }

    /**
     * Sets nft_owner_number
     *
     * @param int $nft_owner_number It describes the holders of the NFT;
     *
     * @return $this
     */
    public function setNftOwnerNumber($nft_owner_number)
    {
        $this->container['nft_owner_number'] = $nft_owner_number;

        return $this;
    }

    /**
     * Gets create_block_number
     *
     * @return int
     */
    public function getCreateBlockNumber()
    {
        return $this->container['create_block_number'];
    }

    /**
     * Sets create_block_number
     *
     * @param int $create_block_number describes the number of blocks created for the NFT. Return \"null\" means no NFTs with duplicate name and symbol.
     *
     * @return $this
     */
    public function setCreateBlockNumber($create_block_number)
    {
        $this->container['create_block_number'] = $create_block_number;

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
     * @param string $nft_symbol It describes the symbol of the NFT;
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
