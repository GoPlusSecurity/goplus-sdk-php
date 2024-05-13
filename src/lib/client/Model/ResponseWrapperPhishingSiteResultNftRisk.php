<?php
/**
 * ResponseWrapperPhishingSiteResultNftRisk
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
 * ResponseWrapperPhishingSiteResultNftRisk Class Doc Comment
 *
 * @category Class
 * @description nft check risk
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperPhishingSiteResultNftRisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperPhishingSite_result_nft_risk';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nft_open_source' => 'int',
        'privileged_minting' => '\Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedMinting',
        'oversupply_minting' => 'int',
        'nft_proxy' => 'int',
        'restricted_approval' => 'int',
        'transfer_without_approval' => '\Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskTransferWithoutApproval',
        'privileged_burn' => '\Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedBurn',
        'self_destruct' => '\Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskSelfDestruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nft_open_source' => 'int32',
        'privileged_minting' => null,
        'oversupply_minting' => 'int32',
        'nft_proxy' => 'int32',
        'restricted_approval' => 'int32',
        'transfer_without_approval' => null,
        'privileged_burn' => null,
        'self_destruct' => null
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
        'nft_open_source' => 'nft_open_source',
        'privileged_minting' => 'privileged_minting',
        'oversupply_minting' => 'oversupply_minting',
        'nft_proxy' => 'nft_proxy',
        'restricted_approval' => 'restricted_approval',
        'transfer_without_approval' => 'transfer_without_approval',
        'privileged_burn' => 'privileged_burn',
        'self_destruct' => 'self_destruct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nft_open_source' => 'setNftOpenSource',
        'privileged_minting' => 'setPrivilegedMinting',
        'oversupply_minting' => 'setOversupplyMinting',
        'nft_proxy' => 'setNftProxy',
        'restricted_approval' => 'setRestrictedApproval',
        'transfer_without_approval' => 'setTransferWithoutApproval',
        'privileged_burn' => 'setPrivilegedBurn',
        'self_destruct' => 'setSelfDestruct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nft_open_source' => 'getNftOpenSource',
        'privileged_minting' => 'getPrivilegedMinting',
        'oversupply_minting' => 'getOversupplyMinting',
        'nft_proxy' => 'getNftProxy',
        'restricted_approval' => 'getRestrictedApproval',
        'transfer_without_approval' => 'getTransferWithoutApproval',
        'privileged_burn' => 'getPrivilegedBurn',
        'self_destruct' => 'getSelfDestruct'
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
        $this->container['nft_open_source'] = isset($data['nft_open_source']) ? $data['nft_open_source'] : null;
        $this->container['privileged_minting'] = isset($data['privileged_minting']) ? $data['privileged_minting'] : null;
        $this->container['oversupply_minting'] = isset($data['oversupply_minting']) ? $data['oversupply_minting'] : null;
        $this->container['nft_proxy'] = isset($data['nft_proxy']) ? $data['nft_proxy'] : null;
        $this->container['restricted_approval'] = isset($data['restricted_approval']) ? $data['restricted_approval'] : null;
        $this->container['transfer_without_approval'] = isset($data['transfer_without_approval']) ? $data['transfer_without_approval'] : null;
        $this->container['privileged_burn'] = isset($data['privileged_burn']) ? $data['privileged_burn'] : null;
        $this->container['self_destruct'] = isset($data['self_destruct']) ? $data['self_destruct'] : null;
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
     * Gets nft_open_source
     *
     * @return int
     */
    public function getNftOpenSource()
    {
        return $this->container['nft_open_source'];
    }

    /**
     * Sets nft_open_source
     *
     * @param int $nft_open_source It describes whether this contract is open source.  \"1\" means true;  \"0\" means false.(Notice:Un-open-sourced contracts may hide various unknown mechanisms and are extremely risky. When the contract is not open source, we will not be able to detect other risk items.)
     *
     * @return $this
     */
    public function setNftOpenSource($nft_open_source)
    {
        $this->container['nft_open_source'] = $nft_open_source;

        return $this;
    }

    /**
     * Gets privileged_minting
     *
     * @return \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedMinting
     */
    public function getPrivilegedMinting()
    {
        return $this->container['privileged_minting'];
    }

    /**
     * Sets privileged_minting
     *
     * @param \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedMinting $privileged_minting privileged_minting
     *
     * @return $this
     */
    public function setPrivilegedMinting($privileged_minting)
    {
        $this->container['privileged_minting'] = $privileged_minting;

        return $this;
    }

    /**
     * Gets oversupply_minting
     *
     * @return int
     */
    public function getOversupplyMinting()
    {
        return $this->container['oversupply_minting'];
    }

    /**
     * Sets oversupply_minting
     *
     * @param int $oversupply_minting It describes whether this NFT owner can bypass the maximum amount of minting specified in the contract, and continue to mint NFTs beyond this limit.  \"1\" means true;  \"0\" means false;  \"Null\" means unknown.(Notice:Oversupply minting refers to the existence of a special mint method in the NFT contract - the owner can bypass the maximum amount of minting specified in the contract, and continue to mint NFTs beyond this limit.)
     *
     * @return $this
     */
    public function setOversupplyMinting($oversupply_minting)
    {
        $this->container['oversupply_minting'] = $oversupply_minting;

        return $this;
    }

    /**
     * Gets nft_proxy
     *
     * @return int
     */
    public function getNftProxy()
    {
        return $this->container['nft_proxy'];
    }

    /**
     * Sets nft_proxy
     *
     * @param int $nft_proxy It describes whether this NFT contract has a proxy contract.  \"1\" means true;  \"0\" means false;  \"Null\" means unknown.(Notice:(1) When \"is_open_source\":\"0\", it will return \"null\". (2) Most Proxy contracts are accompanied by modifiable implementation contracts, and implementation contracts may contain significant potential risk.)
     *
     * @return $this
     */
    public function setNftProxy($nft_proxy)
    {
        $this->container['nft_proxy'] = $nft_proxy;

        return $this;
    }

    /**
     * Gets restricted_approval
     *
     * @return int
     */
    public function getRestrictedApproval()
    {
        return $this->container['restricted_approval'];
    }

    /**
     * Sets restricted_approval
     *
     * @param int $restricted_approval It describes whether the NFT contract can restrict the approval, resulting in NFT can not be traded on the NFT DEX. \"1\" means true;  \"0\" means false;  \"Null\" means unknown.(Notice:If this risk exists, it means that users will not be able to trade the NFT on the exchange and only privileged users in the whitelist will be able to trade normally.)
     *
     * @return $this
     */
    public function setRestrictedApproval($restricted_approval)
    {
        $this->container['restricted_approval'] = $restricted_approval;

        return $this;
    }

    /**
     * Gets transfer_without_approval
     *
     * @return \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskTransferWithoutApproval
     */
    public function getTransferWithoutApproval()
    {
        return $this->container['transfer_without_approval'];
    }

    /**
     * Sets transfer_without_approval
     *
     * @param \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskTransferWithoutApproval $transfer_without_approval transfer_without_approval
     *
     * @return $this
     */
    public function setTransferWithoutApproval($transfer_without_approval)
    {
        $this->container['transfer_without_approval'] = $transfer_without_approval;

        return $this;
    }

    /**
     * Gets privileged_burn
     *
     * @return \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedBurn
     */
    public function getPrivilegedBurn()
    {
        return $this->container['privileged_burn'];
    }

    /**
     * Sets privileged_burn
     *
     * @param \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskPrivilegedBurn $privileged_burn privileged_burn
     *
     * @return $this
     */
    public function setPrivilegedBurn($privileged_burn)
    {
        $this->container['privileged_burn'] = $privileged_burn;

        return $this;
    }

    /**
     * Gets self_destruct
     *
     * @return \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskSelfDestruct
     */
    public function getSelfDestruct()
    {
        return $this->container['self_destruct'];
    }

    /**
     * Sets self_destruct
     *
     * @param \Swagger\Client\Model\ResponseWrapperPhishingSiteResultNftRiskSelfDestruct $self_destruct self_destruct
     *
     * @return $this
     */
    public function setSelfDestruct($self_destruct)
    {
        $this->container['self_destruct'] = $self_destruct;

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