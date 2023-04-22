<?php
/**
 * DappContractSecurityResponse
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
 * DappContractSecurityResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DappContractSecurityResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DappContractSecurityResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audit_info' => '\Swagger\Client\Model\AuditInfo[]',
'contracts_security' => '\Swagger\Client\Model\ContractsSecurity[]',
'is_audit' => 'int',
'project_name' => 'string',
'trust_list' => 'int',
'url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audit_info' => null,
'contracts_security' => null,
'is_audit' => 'int32',
'project_name' => null,
'trust_list' => 'int32',
'url' => null    ];

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
        'audit_info' => 'audit_info',
'contracts_security' => 'contracts_security',
'is_audit' => 'is_audit',
'project_name' => 'project_name',
'trust_list' => 'trust_list',
'url' => 'url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audit_info' => 'setAuditInfo',
'contracts_security' => 'setContractsSecurity',
'is_audit' => 'setIsAudit',
'project_name' => 'setProjectName',
'trust_list' => 'setTrustList',
'url' => 'setUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audit_info' => 'getAuditInfo',
'contracts_security' => 'getContractsSecurity',
'is_audit' => 'getIsAudit',
'project_name' => 'getProjectName',
'trust_list' => 'getTrustList',
'url' => 'getUrl'    ];

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
        $this->container['audit_info'] = isset($data['audit_info']) ? $data['audit_info'] : null;
        $this->container['contracts_security'] = isset($data['contracts_security']) ? $data['contracts_security'] : null;
        $this->container['is_audit'] = isset($data['is_audit']) ? $data['is_audit'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['trust_list'] = isset($data['trust_list']) ? $data['trust_list'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets audit_info
     *
     * @return \Swagger\Client\Model\AuditInfo[]
     */
    public function getAuditInfo()
    {
        return $this->container['audit_info'];
    }

    /**
     * Sets audit_info
     *
     * @param \Swagger\Client\Model\AuditInfo[] $audit_info audit info(Notice:When the dApp was not audited, (\"is_audit\"=0), it will return \"null\".If there are multiple audit reports, the information of the latest audit report is displayed.)
     *
     * @return $this
     */
    public function setAuditInfo($audit_info)
    {
        $this->container['audit_info'] = $audit_info;

        return $this;
    }

    /**
     * Gets contracts_security
     *
     * @return \Swagger\Client\Model\ContractsSecurity[]
     */
    public function getContractsSecurity()
    {
        return $this->container['contracts_security'];
    }

    /**
     * Sets contracts_security
     *
     * @param \Swagger\Client\Model\ContractsSecurity[] $contracts_security contracts_security
     *
     * @return $this
     */
    public function setContractsSecurity($contracts_security)
    {
        $this->container['contracts_security'] = $contracts_security;

        return $this;
    }

    /**
     * Gets is_audit
     *
     * @return int
     */
    public function getIsAudit()
    {
        return $this->container['is_audit'];
    }

    /**
     * Sets is_audit
     *
     * @param int $is_audit It describes whether the dApp was audited by a reputable audit firm. \"1\" means true; \"0\" means that we have not found audit information for this dApp .(Notice:Return \"0\" does not mean the dApp was not audited. Maybe we just haven't found audit information for this dApp yet.)
     *
     * @return $this
     */
    public function setIsAudit($is_audit)
    {
        $this->container['is_audit'] = $is_audit;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name It describes the dApp project name.
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

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
     * @param int $trust_list It describes whether the dapp is a famous and trustworthy one. \"1\" means true;  \"0\" means that this dapp is not yet in our trusted list.(Notice:(1) Only \"trust_list\": \"1\" means it is a famous and trustworthy dapp.  (2) \"0\" return doesn't mean it is risky.)
     *
     * @return $this
     */
    public function setTrustList($trust_list)
    {
        $this->container['trust_list'] = $trust_list;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url It describes the dApp's website link.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
