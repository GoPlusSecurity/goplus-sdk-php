<?php
/**
 * ResponseWrapperGetDefiInfoResult
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
 * ResponseWrapperGetDefiInfoResult Class Doc Comment
 *
 * @category Class
 * @description Response result
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperGetDefiInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperGetDefiInfo_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner' => '\Swagger\Client\Model\ResponseWrapperGetDefiInfoResultOwner',
        'privilege_withdraw' => 'int',
        'withdraw_missing' => 'int',
        'is_open_source' => 'int',
        'blacklist' => 'int',
        'contract_name' => 'string',
        'selfdestruct' => 'int',
        'is_proxy' => 'int',
        'approval_abuse' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner' => null,
        'privilege_withdraw' => 'int32',
        'withdraw_missing' => 'int32',
        'is_open_source' => 'int32',
        'blacklist' => 'int32',
        'contract_name' => null,
        'selfdestruct' => 'int32',
        'is_proxy' => 'int32',
        'approval_abuse' => 'int32'
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
        'owner' => 'owner',
        'privilege_withdraw' => 'privilege_withdraw',
        'withdraw_missing' => 'withdraw_missing',
        'is_open_source' => 'is_open_source',
        'blacklist' => 'blacklist',
        'contract_name' => 'contract_name',
        'selfdestruct' => 'selfdestruct',
        'is_proxy' => 'is_proxy',
        'approval_abuse' => 'approval_abuse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner' => 'setOwner',
        'privilege_withdraw' => 'setPrivilegeWithdraw',
        'withdraw_missing' => 'setWithdrawMissing',
        'is_open_source' => 'setIsOpenSource',
        'blacklist' => 'setBlacklist',
        'contract_name' => 'setContractName',
        'selfdestruct' => 'setSelfdestruct',
        'is_proxy' => 'setIsProxy',
        'approval_abuse' => 'setApprovalAbuse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner' => 'getOwner',
        'privilege_withdraw' => 'getPrivilegeWithdraw',
        'withdraw_missing' => 'getWithdrawMissing',
        'is_open_source' => 'getIsOpenSource',
        'blacklist' => 'getBlacklist',
        'contract_name' => 'getContractName',
        'selfdestruct' => 'getSelfdestruct',
        'is_proxy' => 'getIsProxy',
        'approval_abuse' => 'getApprovalAbuse'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['privilege_withdraw'] = isset($data['privilege_withdraw']) ? $data['privilege_withdraw'] : null;
        $this->container['withdraw_missing'] = isset($data['withdraw_missing']) ? $data['withdraw_missing'] : null;
        $this->container['is_open_source'] = isset($data['is_open_source']) ? $data['is_open_source'] : null;
        $this->container['blacklist'] = isset($data['blacklist']) ? $data['blacklist'] : null;
        $this->container['contract_name'] = isset($data['contract_name']) ? $data['contract_name'] : null;
        $this->container['selfdestruct'] = isset($data['selfdestruct']) ? $data['selfdestruct'] : null;
        $this->container['is_proxy'] = isset($data['is_proxy']) ? $data['is_proxy'] : null;
        $this->container['approval_abuse'] = isset($data['approval_abuse']) ? $data['approval_abuse'] : null;
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
     * Gets owner
     *
     * @return \Swagger\Client\Model\ResponseWrapperGetDefiInfoResultOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Swagger\Client\Model\ResponseWrapperGetDefiInfoResultOwner $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets privilege_withdraw
     *
     * @return int
     */
    public function getPrivilegeWithdraw()
    {
        return $this->container['privilege_withdraw'];
    }

    /**
     * Sets privilege_withdraw
     *
     * @param int $privilege_withdraw It descirbes whether the contract owner can withdraw all the assets in the contract, without uses' permission. \"1\" means true; \"0\" means false;  \"-1\" means unknown.
     *
     * @return $this
     */
    public function setPrivilegeWithdraw($privilege_withdraw)
    {
        $this->container['privilege_withdraw'] = $privilege_withdraw;

        return $this;
    }

    /**
     * Gets withdraw_missing
     *
     * @return int
     */
    public function getWithdrawMissing()
    {
        return $this->container['withdraw_missing'];
    }

    /**
     * Sets withdraw_missing
     *
     * @param int $withdraw_missing It describes whether the contract lacks withdrawal method. If it is missing, users will be unable to withdraw the assets they have putted in. \"1\" means true; \"0\" means false;  \"-1\" means unknown.
     *
     * @return $this
     */
    public function setWithdrawMissing($withdraw_missing)
    {
        $this->container['withdraw_missing'] = $withdraw_missing;

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
     * @param int $is_open_source It describes whether this contract is open source.  \"1\" means true;  \"0\" means false.
     *
     * @return $this
     */
    public function setIsOpenSource($is_open_source)
    {
        $this->container['is_open_source'] = $is_open_source;

        return $this;
    }

    /**
     * Gets blacklist
     *
     * @return int
     */
    public function getBlacklist()
    {
        return $this->container['blacklist'];
    }

    /**
     * Sets blacklist
     *
     * @param int $blacklist It describes whether the contract has blacklist function that would block user from withdrawing their assets. \"1\" means true; \"0\" means false;  \"-1\" means unknown.
     *
     * @return $this
     */
    public function setBlacklist($blacklist)
    {
        $this->container['blacklist'] = $blacklist;

        return $this;
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
     * @param string $contract_name Name of the contract.
     *
     * @return $this
     */
    public function setContractName($contract_name)
    {
        $this->container['contract_name'] = $contract_name;

        return $this;
    }

    /**
     * Gets selfdestruct
     *
     * @return int
     */
    public function getSelfdestruct()
    {
        return $this->container['selfdestruct'];
    }

    /**
     * Sets selfdestruct
     *
     * @param int $selfdestruct It describes whether this contract can self destruct. \"1\" means true;  \"0\" means false; “-1” means unknown.
     *
     * @return $this
     */
    public function setSelfdestruct($selfdestruct)
    {
        $this->container['selfdestruct'] = $selfdestruct;

        return $this;
    }

    /**
     * Gets is_proxy
     *
     * @return int
     */
    public function getIsProxy()
    {
        return $this->container['is_proxy'];
    }

    /**
     * Sets is_proxy
     *
     * @param int $is_proxy It describes whether this contract has a proxy contract.  \"1\" means true;  \"0\" means false; “-1” means unknown.
     *
     * @return $this
     */
    public function setIsProxy($is_proxy)
    {
        $this->container['is_proxy'] = $is_proxy;

        return $this;
    }

    /**
     * Gets approval_abuse
     *
     * @return int
     */
    public function getApprovalAbuse()
    {
        return $this->container['approval_abuse'];
    }

    /**
     * Sets approval_abuse
     *
     * @param int $approval_abuse It describes whether the owner can spend the allowance that obtained by the contract. If so, this function could potentially be abused to steal user assets. \"1\" means true;  \"0\" means false; “-1” means unknown.
     *
     * @return $this
     */
    public function setApprovalAbuse($approval_abuse)
    {
        $this->container['approval_abuse'] = $approval_abuse;

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
