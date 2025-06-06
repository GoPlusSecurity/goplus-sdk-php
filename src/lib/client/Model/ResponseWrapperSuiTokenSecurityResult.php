<?php
/**
 * ResponseWrapperSuiTokenSecurityResult
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
 * ResponseWrapperSuiTokenSecurityResult Class Doc Comment
 *
 * @category Class
 * @description key is contract address
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperSuiTokenSecurityResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperSuiTokenSecurity_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'symbol' => 'string',
        'creator' => 'string',
        'contract_upgradeable' => '\Swagger\Client\Model\ResponseWrapperSuiTokenSecurityContractUpgradeable',
        'total_supply' => 'string',
        'decimals' => 'int',
        'name' => 'string',
        'trusted_token' => 'string',
        'metadata_modifiable' => '\Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMetadataModifiable',
        'blacklist' => '\Swagger\Client\Model\ResponseWrapperSuiTokenSecurityBlacklist',
        'mintable' => '\Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMintable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'symbol' => null,
        'creator' => null,
        'contract_upgradeable' => null,
        'total_supply' => null,
        'decimals' => 'int32',
        'name' => null,
        'trusted_token' => null,
        'metadata_modifiable' => null,
        'blacklist' => null,
        'mintable' => null
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
        'symbol' => 'symbol',
        'creator' => 'creator',
        'contract_upgradeable' => 'contract_upgradeable',
        'total_supply' => 'total_supply',
        'decimals' => 'decimals',
        'name' => 'name',
        'trusted_token' => 'trusted_token',
        'metadata_modifiable' => 'metadata_modifiable',
        'blacklist' => 'blacklist',
        'mintable' => 'mintable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'creator' => 'setCreator',
        'contract_upgradeable' => 'setContractUpgradeable',
        'total_supply' => 'setTotalSupply',
        'decimals' => 'setDecimals',
        'name' => 'setName',
        'trusted_token' => 'setTrustedToken',
        'metadata_modifiable' => 'setMetadataModifiable',
        'blacklist' => 'setBlacklist',
        'mintable' => 'setMintable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'creator' => 'getCreator',
        'contract_upgradeable' => 'getContractUpgradeable',
        'total_supply' => 'getTotalSupply',
        'decimals' => 'getDecimals',
        'name' => 'getName',
        'trusted_token' => 'getTrustedToken',
        'metadata_modifiable' => 'getMetadataModifiable',
        'blacklist' => 'getBlacklist',
        'mintable' => 'getMintable'
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
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['contract_upgradeable'] = isset($data['contract_upgradeable']) ? $data['contract_upgradeable'] : null;
        $this->container['total_supply'] = isset($data['total_supply']) ? $data['total_supply'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['trusted_token'] = isset($data['trusted_token']) ? $data['trusted_token'] : null;
        $this->container['metadata_modifiable'] = isset($data['metadata_modifiable']) ? $data['metadata_modifiable'] : null;
        $this->container['blacklist'] = isset($data['blacklist']) ? $data['blacklist'] : null;
        $this->container['mintable'] = isset($data['mintable']) ? $data['mintable'] : null;
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
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol Symbol of the token.
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator Creator of the token.
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets contract_upgradeable
     *
     * @return \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityContractUpgradeable
     */
    public function getContractUpgradeable()
    {
        return $this->container['contract_upgradeable'];
    }

    /**
     * Sets contract_upgradeable
     *
     * @param \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityContractUpgradeable $contract_upgradeable contract_upgradeable
     *
     * @return $this
     */
    public function setContractUpgradeable($contract_upgradeable)
    {
        $this->container['contract_upgradeable'] = $contract_upgradeable;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return string
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param string $total_supply Total supply of the token.
     *
     * @return $this
     */
    public function setTotalSupply($total_supply)
    {
        $this->container['total_supply'] = $total_supply;

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
     * @param int $decimals Decimals of the token.
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the token.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets trusted_token
     *
     * @return string
     */
    public function getTrustedToken()
    {
        return $this->container['trusted_token'];
    }

    /**
     * Sets trusted_token
     *
     * @param string $trusted_token If the token is a famous and trustworthy one. \"1\" means yes.(Notice: This field is intended to identify well-known and reputable tokens. Trusted tokens with special functions (such as the mintable function in USDC) are generally not considered risk items. Please note that a value other than “1” does not indicate that the token is untrustworthy. We recommend properly evaluating and handling tokens with values other than “1” to avoid unnecessary disputes. )
     *
     * @return $this
     */
    public function setTrustedToken($trusted_token)
    {
        $this->container['trusted_token'] = $trusted_token;

        return $this;
    }

    /**
     * Gets metadata_modifiable
     *
     * @return \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMetadataModifiable
     */
    public function getMetadataModifiable()
    {
        return $this->container['metadata_modifiable'];
    }

    /**
     * Sets metadata_modifiable
     *
     * @param \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMetadataModifiable $metadata_modifiable metadata_modifiable
     *
     * @return $this
     */
    public function setMetadataModifiable($metadata_modifiable)
    {
        $this->container['metadata_modifiable'] = $metadata_modifiable;

        return $this;
    }

    /**
     * Gets blacklist
     *
     * @return \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityBlacklist
     */
    public function getBlacklist()
    {
        return $this->container['blacklist'];
    }

    /**
     * Sets blacklist
     *
     * @param \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityBlacklist $blacklist blacklist
     *
     * @return $this
     */
    public function setBlacklist($blacklist)
    {
        $this->container['blacklist'] = $blacklist;

        return $this;
    }

    /**
     * Gets mintable
     *
     * @return \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMintable
     */
    public function getMintable()
    {
        return $this->container['mintable'];
    }

    /**
     * Sets mintable
     *
     * @param \Swagger\Client\Model\ResponseWrapperSuiTokenSecurityMintable $mintable mintable
     *
     * @return $this
     */
    public function setMintable($mintable)
    {
        $this->container['mintable'] = $mintable;

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
