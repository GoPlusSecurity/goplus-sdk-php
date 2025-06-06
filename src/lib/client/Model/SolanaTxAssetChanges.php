<?php
/**
 * SolanaTxAssetChanges
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
 * SolanaTxAssetChanges Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SolanaTxAssetChanges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SolanaTxAssetChanges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nft_changes' => '\Swagger\Client\Model\SolanaTxAssetChange[]',
        'token_changes' => '\Swagger\Client\Model\SolanaTxAssetChange[]',
        'sol_changes' => '\Swagger\Client\Model\SolanaTxSolChange[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nft_changes' => null,
        'token_changes' => null,
        'sol_changes' => null
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
        'nft_changes' => 'nft_changes',
        'token_changes' => 'token_changes',
        'sol_changes' => 'sol_changes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nft_changes' => 'setNftChanges',
        'token_changes' => 'setTokenChanges',
        'sol_changes' => 'setSolChanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nft_changes' => 'getNftChanges',
        'token_changes' => 'getTokenChanges',
        'sol_changes' => 'getSolChanges'
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
        $this->container['nft_changes'] = isset($data['nft_changes']) ? $data['nft_changes'] : null;
        $this->container['token_changes'] = isset($data['token_changes']) ? $data['token_changes'] : null;
        $this->container['sol_changes'] = isset($data['sol_changes']) ? $data['sol_changes'] : null;
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
     * Gets nft_changes
     *
     * @return \Swagger\Client\Model\SolanaTxAssetChange[]
     */
    public function getNftChanges()
    {
        return $this->container['nft_changes'];
    }

    /**
     * Sets nft_changes
     *
     * @param \Swagger\Client\Model\SolanaTxAssetChange[] $nft_changes nft_changes
     *
     * @return $this
     */
    public function setNftChanges($nft_changes)
    {
        $this->container['nft_changes'] = $nft_changes;

        return $this;
    }

    /**
     * Gets token_changes
     *
     * @return \Swagger\Client\Model\SolanaTxAssetChange[]
     */
    public function getTokenChanges()
    {
        return $this->container['token_changes'];
    }

    /**
     * Sets token_changes
     *
     * @param \Swagger\Client\Model\SolanaTxAssetChange[] $token_changes token_changes
     *
     * @return $this
     */
    public function setTokenChanges($token_changes)
    {
        $this->container['token_changes'] = $token_changes;

        return $this;
    }

    /**
     * Gets sol_changes
     *
     * @return \Swagger\Client\Model\SolanaTxSolChange[]
     */
    public function getSolChanges()
    {
        return $this->container['sol_changes'];
    }

    /**
     * Sets sol_changes
     *
     * @param \Swagger\Client\Model\SolanaTxSolChange[] $sol_changes sol_changes
     *
     * @return $this
     */
    public function setSolChanges($sol_changes)
    {
        $this->container['sol_changes'] = $sol_changes;

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
