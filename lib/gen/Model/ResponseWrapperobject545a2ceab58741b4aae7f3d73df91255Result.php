<?php
/**
 * ResponseWrapperobject545a2ceab58741b4aae7f3d73df91255Result
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
 * ResponseWrapperobject545a2ceab58741b4aae7f3d73df91255Result Class Doc Comment
 *
 * @category Class
 * @description Response result
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseWrapperobject545a2ceab58741b4aae7f3d73df91255Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseWrapperobject545a2ceab58741b4aae7f3d73df91255_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cybercrime' => 'string',
'money_laundering' => 'string',
'number_of_malicious_contracts_created' => 'string',
'financial_crime' => 'string',
'darkweb_transactions' => 'string',
'phishing_activities' => 'string',
'contract_address' => 'string',
'fake_kyc' => 'string',
'blacklist_doubt' => 'string',
'data_source' => 'string',
'stealing_attack' => 'string',
'blackmail_activities' => 'string',
'sanctioned' => 'string',
'malicious_mining_activities' => 'string',
'mixer' => 'string',
'honeypot_related_address' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cybercrime' => null,
'money_laundering' => null,
'number_of_malicious_contracts_created' => null,
'financial_crime' => null,
'darkweb_transactions' => null,
'phishing_activities' => null,
'contract_address' => null,
'fake_kyc' => null,
'blacklist_doubt' => null,
'data_source' => null,
'stealing_attack' => null,
'blackmail_activities' => null,
'sanctioned' => null,
'malicious_mining_activities' => null,
'mixer' => null,
'honeypot_related_address' => null    ];

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
        'cybercrime' => 'cybercrime',
'money_laundering' => 'money_laundering',
'number_of_malicious_contracts_created' => 'number_of_malicious_contracts_created',
'financial_crime' => 'financial_crime',
'darkweb_transactions' => 'darkweb_transactions',
'phishing_activities' => 'phishing_activities',
'contract_address' => 'contract_address',
'fake_kyc' => 'fake_kyc',
'blacklist_doubt' => 'blacklist_doubt',
'data_source' => 'data_source',
'stealing_attack' => 'stealing_attack',
'blackmail_activities' => 'blackmail_activities',
'sanctioned' => 'sanctioned',
'malicious_mining_activities' => 'malicious_mining_activities',
'mixer' => 'mixer',
'honeypot_related_address' => 'honeypot_related_address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cybercrime' => 'setCybercrime',
'money_laundering' => 'setMoneyLaundering',
'number_of_malicious_contracts_created' => 'setNumberOfMaliciousContractsCreated',
'financial_crime' => 'setFinancialCrime',
'darkweb_transactions' => 'setDarkwebTransactions',
'phishing_activities' => 'setPhishingActivities',
'contract_address' => 'setContractAddress',
'fake_kyc' => 'setFakeKyc',
'blacklist_doubt' => 'setBlacklistDoubt',
'data_source' => 'setDataSource',
'stealing_attack' => 'setStealingAttack',
'blackmail_activities' => 'setBlackmailActivities',
'sanctioned' => 'setSanctioned',
'malicious_mining_activities' => 'setMaliciousMiningActivities',
'mixer' => 'setMixer',
'honeypot_related_address' => 'setHoneypotRelatedAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cybercrime' => 'getCybercrime',
'money_laundering' => 'getMoneyLaundering',
'number_of_malicious_contracts_created' => 'getNumberOfMaliciousContractsCreated',
'financial_crime' => 'getFinancialCrime',
'darkweb_transactions' => 'getDarkwebTransactions',
'phishing_activities' => 'getPhishingActivities',
'contract_address' => 'getContractAddress',
'fake_kyc' => 'getFakeKyc',
'blacklist_doubt' => 'getBlacklistDoubt',
'data_source' => 'getDataSource',
'stealing_attack' => 'getStealingAttack',
'blackmail_activities' => 'getBlackmailActivities',
'sanctioned' => 'getSanctioned',
'malicious_mining_activities' => 'getMaliciousMiningActivities',
'mixer' => 'getMixer',
'honeypot_related_address' => 'getHoneypotRelatedAddress'    ];

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
        $this->container['cybercrime'] = isset($data['cybercrime']) ? $data['cybercrime'] : null;
        $this->container['money_laundering'] = isset($data['money_laundering']) ? $data['money_laundering'] : null;
        $this->container['number_of_malicious_contracts_created'] = isset($data['number_of_malicious_contracts_created']) ? $data['number_of_malicious_contracts_created'] : null;
        $this->container['financial_crime'] = isset($data['financial_crime']) ? $data['financial_crime'] : null;
        $this->container['darkweb_transactions'] = isset($data['darkweb_transactions']) ? $data['darkweb_transactions'] : null;
        $this->container['phishing_activities'] = isset($data['phishing_activities']) ? $data['phishing_activities'] : null;
        $this->container['contract_address'] = isset($data['contract_address']) ? $data['contract_address'] : null;
        $this->container['fake_kyc'] = isset($data['fake_kyc']) ? $data['fake_kyc'] : null;
        $this->container['blacklist_doubt'] = isset($data['blacklist_doubt']) ? $data['blacklist_doubt'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['stealing_attack'] = isset($data['stealing_attack']) ? $data['stealing_attack'] : null;
        $this->container['blackmail_activities'] = isset($data['blackmail_activities']) ? $data['blackmail_activities'] : null;
        $this->container['sanctioned'] = isset($data['sanctioned']) ? $data['sanctioned'] : null;
        $this->container['malicious_mining_activities'] = isset($data['malicious_mining_activities']) ? $data['malicious_mining_activities'] : null;
        $this->container['mixer'] = isset($data['mixer']) ? $data['mixer'] : null;
        $this->container['honeypot_related_address'] = isset($data['honeypot_related_address']) ? $data['honeypot_related_address'] : null;
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
     * Gets cybercrime
     *
     * @return string
     */
    public function getCybercrime()
    {
        return $this->container['cybercrime'];
    }

    /**
     * Sets cybercrime
     *
     * @param string $cybercrime It describes whether this address is involved in cybercrime. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setCybercrime($cybercrime)
    {
        $this->container['cybercrime'] = $cybercrime;

        return $this;
    }

    /**
     * Gets money_laundering
     *
     * @return string
     */
    public function getMoneyLaundering()
    {
        return $this->container['money_laundering'];
    }

    /**
     * Sets money_laundering
     *
     * @param string $money_laundering It describes whether this address is involved in money laundering. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setMoneyLaundering($money_laundering)
    {
        $this->container['money_laundering'] = $money_laundering;

        return $this;
    }

    /**
     * Gets number_of_malicious_contracts_created
     *
     * @return string
     */
    public function getNumberOfMaliciousContractsCreated()
    {
        return $this->container['number_of_malicious_contracts_created'];
    }

    /**
     * Sets number_of_malicious_contracts_created
     *
     * @param string $number_of_malicious_contracts_created This parameter describes how many malicious contracts have been created by this address.
     *
     * @return $this
     */
    public function setNumberOfMaliciousContractsCreated($number_of_malicious_contracts_created)
    {
        $this->container['number_of_malicious_contracts_created'] = $number_of_malicious_contracts_created;

        return $this;
    }

    /**
     * Gets financial_crime
     *
     * @return string
     */
    public function getFinancialCrime()
    {
        return $this->container['financial_crime'];
    }

    /**
     * Sets financial_crime
     *
     * @param string $financial_crime It describes whether this address is involved in financial crime. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setFinancialCrime($financial_crime)
    {
        $this->container['financial_crime'] = $financial_crime;

        return $this;
    }

    /**
     * Gets darkweb_transactions
     *
     * @return string
     */
    public function getDarkwebTransactions()
    {
        return $this->container['darkweb_transactions'];
    }

    /**
     * Sets darkweb_transactions
     *
     * @param string $darkweb_transactions It describes whether this address is involved in darkweb transactions. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setDarkwebTransactions($darkweb_transactions)
    {
        $this->container['darkweb_transactions'] = $darkweb_transactions;

        return $this;
    }

    /**
     * Gets phishing_activities
     *
     * @return string
     */
    public function getPhishingActivities()
    {
        return $this->container['phishing_activities'];
    }

    /**
     * Sets phishing_activities
     *
     * @param string $phishing_activities It describes whether this address has implemented phishing activities. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setPhishingActivities($phishing_activities)
    {
        $this->container['phishing_activities'] = $phishing_activities;

        return $this;
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
     * @param string $contract_address It describes whether this address is a contract address. \"1\" means true; \"0\" means false.(Notice:If only the address is sent to the API and not the chain id, the \"contract_address\" will not be returned (This is because there are cases where the same address is a contract in one public chain but not in other public chains.) Determining the contract address is achieved by calling a third-party blockchain browser interface. Since it takes time for the browser interface to return, the field may be empty on the first request. Solution: the second call around 5s can return whether the address is the value of the contract normally.)
     *
     * @return $this
     */
    public function setContractAddress($contract_address)
    {
        $this->container['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Gets fake_kyc
     *
     * @return string
     */
    public function getFakeKyc()
    {
        return $this->container['fake_kyc'];
    }

    /**
     * Sets fake_kyc
     *
     * @param string $fake_kyc It describes whether this address is involved in fake KYC. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setFakeKyc($fake_kyc)
    {
        $this->container['fake_kyc'] = $fake_kyc;

        return $this;
    }

    /**
     * Gets blacklist_doubt
     *
     * @return string
     */
    public function getBlacklistDoubt()
    {
        return $this->container['blacklist_doubt'];
    }

    /**
     * Sets blacklist_doubt
     *
     * @param string $blacklist_doubt It describes whether this address is suspected of malicious behavior. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setBlacklistDoubt($blacklist_doubt)
    {
        $this->container['blacklist_doubt'] = $blacklist_doubt;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string $data_source It describes the data source for this address information. For example：GoPlus/SlowMist
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets stealing_attack
     *
     * @return string
     */
    public function getStealingAttack()
    {
        return $this->container['stealing_attack'];
    }

    /**
     * Sets stealing_attack
     *
     * @param string $stealing_attack It describes whether this address has implemented stealing attacks. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setStealingAttack($stealing_attack)
    {
        $this->container['stealing_attack'] = $stealing_attack;

        return $this;
    }

    /**
     * Gets blackmail_activities
     *
     * @return string
     */
    public function getBlackmailActivities()
    {
        return $this->container['blackmail_activities'];
    }

    /**
     * Sets blackmail_activities
     *
     * @param string $blackmail_activities It describes whether this address has implemented blackmail activities. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setBlackmailActivities($blackmail_activities)
    {
        $this->container['blackmail_activities'] = $blackmail_activities;

        return $this;
    }

    /**
     * Gets sanctioned
     *
     * @return string
     */
    public function getSanctioned()
    {
        return $this->container['sanctioned'];
    }

    /**
     * Sets sanctioned
     *
     * @param string $sanctioned It describes whether this address is coin sanctioned address. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setSanctioned($sanctioned)
    {
        $this->container['sanctioned'] = $sanctioned;

        return $this;
    }

    /**
     * Gets malicious_mining_activities
     *
     * @return string
     */
    public function getMaliciousMiningActivities()
    {
        return $this->container['malicious_mining_activities'];
    }

    /**
     * Sets malicious_mining_activities
     *
     * @param string $malicious_mining_activities It describes whether this address is involved in malicious mining activities. \"1\" means true; \"0\" means false.
     *
     * @return $this
     */
    public function setMaliciousMiningActivities($malicious_mining_activities)
    {
        $this->container['malicious_mining_activities'] = $malicious_mining_activities;

        return $this;
    }

    /**
     * Gets mixer
     *
     * @return string
     */
    public function getMixer()
    {
        return $this->container['mixer'];
    }

    /**
     * Sets mixer
     *
     * @param string $mixer It describes whether this address is coin mixer address. \"1\" means true; \"0\" means false.(Notice:Interacting with coin mixer may result in your address being added to the risk list of third-party institutions.)
     *
     * @return $this
     */
    public function setMixer($mixer)
    {
        $this->container['mixer'] = $mixer;

        return $this;
    }

    /**
     * Gets honeypot_related_address
     *
     * @return string
     */
    public function getHoneypotRelatedAddress()
    {
        return $this->container['honeypot_related_address'];
    }

    /**
     * Sets honeypot_related_address
     *
     * @param string $honeypot_related_address It describes whether this address is related to honeypot tokens or has created scam tokens. \"1\" means true; \"0\" means false.(Notice:Addresses related to honeypot mean the creators or owners of the honeypot tokens. This is a dangerous address if the address is ralated to honeypot tokens.)
     *
     * @return $this
     */
    public function setHoneypotRelatedAddress($honeypot_related_address)
    {
        $this->container['honeypot_related_address'] = $honeypot_related_address;

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
