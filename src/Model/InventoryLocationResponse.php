<?php
/**
 * InventoryLocationResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ld\php\sdkEbayInventory\Model;

use \ArrayAccess;
use \ld\php\sdkEbayInventory\ObjectSerializer;

/**
 * InventoryLocationResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used by the base response of the &lt;strong&gt;getInventoryLocation&lt;/strong&gt; and &lt;strong&gt;getInventoryLocations&lt;/strong&gt; calls. These responses provide details about inventory location(s) defined for the merchant&#39;s account.
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventoryLocationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryLocationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\ld\php\sdkEbayInventory\Model\Location',
        'locationAdditionalInformation' => 'string',
        'locationInstructions' => 'string',
        'locationTypes' => 'string[]',
        'locationWebUrl' => 'string',
        'merchantLocationKey' => 'string',
        'merchantLocationStatus' => 'string',
        'name' => 'string',
        'operatingHours' => '\ld\php\sdkEbayInventory\Model\OperatingHours[]',
        'phone' => 'string',
        'specialHours' => '\ld\php\sdkEbayInventory\Model\SpecialHours[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'locationAdditionalInformation' => null,
        'locationInstructions' => null,
        'locationTypes' => null,
        'locationWebUrl' => null,
        'merchantLocationKey' => null,
        'merchantLocationStatus' => null,
        'name' => null,
        'operatingHours' => null,
        'phone' => null,
        'specialHours' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'location' => 'location',
        'locationAdditionalInformation' => 'locationAdditionalInformation',
        'locationInstructions' => 'locationInstructions',
        'locationTypes' => 'locationTypes',
        'locationWebUrl' => 'locationWebUrl',
        'merchantLocationKey' => 'merchantLocationKey',
        'merchantLocationStatus' => 'merchantLocationStatus',
        'name' => 'name',
        'operatingHours' => 'operatingHours',
        'phone' => 'phone',
        'specialHours' => 'specialHours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'locationAdditionalInformation' => 'setLocationAdditionalInformation',
        'locationInstructions' => 'setLocationInstructions',
        'locationTypes' => 'setLocationTypes',
        'locationWebUrl' => 'setLocationWebUrl',
        'merchantLocationKey' => 'setMerchantLocationKey',
        'merchantLocationStatus' => 'setMerchantLocationStatus',
        'name' => 'setName',
        'operatingHours' => 'setOperatingHours',
        'phone' => 'setPhone',
        'specialHours' => 'setSpecialHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'locationAdditionalInformation' => 'getLocationAdditionalInformation',
        'locationInstructions' => 'getLocationInstructions',
        'locationTypes' => 'getLocationTypes',
        'locationWebUrl' => 'getLocationWebUrl',
        'merchantLocationKey' => 'getMerchantLocationKey',
        'merchantLocationStatus' => 'getMerchantLocationStatus',
        'name' => 'getName',
        'operatingHours' => 'getOperatingHours',
        'phone' => 'getPhone',
        'specialHours' => 'getSpecialHours'
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
        return self::$openAPIModelName;
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
        $this->container['location'] = $data['location'] ?? null;
        $this->container['locationAdditionalInformation'] = $data['locationAdditionalInformation'] ?? null;
        $this->container['locationInstructions'] = $data['locationInstructions'] ?? null;
        $this->container['locationTypes'] = $data['locationTypes'] ?? null;
        $this->container['locationWebUrl'] = $data['locationWebUrl'] ?? null;
        $this->container['merchantLocationKey'] = $data['merchantLocationKey'] ?? null;
        $this->container['merchantLocationStatus'] = $data['merchantLocationStatus'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['operatingHours'] = $data['operatingHours'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['specialHours'] = $data['specialHours'] ?? null;
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
     * Gets location
     *
     * @return \ld\php\sdkEbayInventory\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \ld\php\sdkEbayInventory\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets locationAdditionalInformation
     *
     * @return string|null
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['locationAdditionalInformation'];
    }

    /**
     * Sets locationAdditionalInformation
     *
     * @param string|null $locationAdditionalInformation This text field provides additional information about an inventory location. This field is returned if it is set for the inventory location. <br><br><b>Max length</b>: 256
     *
     * @return self
     */
    public function setLocationAdditionalInformation($locationAdditionalInformation)
    {
        $this->container['locationAdditionalInformation'] = $locationAdditionalInformation;

        return $this;
    }

    /**
     * Gets locationInstructions
     *
     * @return string|null
     */
    public function getLocationInstructions()
    {
        return $this->container['locationInstructions'];
    }

    /**
     * Sets locationInstructions
     *
     * @param string|null $locationInstructions This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.<br><br><b>Max length</b>: 1000
     *
     * @return self
     */
    public function setLocationInstructions($locationInstructions)
    {
        $this->container['locationInstructions'] = $locationInstructions;

        return $this;
    }

    /**
     * Gets locationTypes
     *
     * @return string[]|null
     */
    public function getLocationTypes()
    {
        return $this->container['locationTypes'];
    }

    /**
     * Sets locationTypes
     *
     * @param string[]|null $locationTypes This container defines the function of the inventory location. Typically, an inventory location will serve as a store or a warehouse, but in some cases, an inventory location may be both. <br><br>The location type of an inventory location defaults to <code>WAREHOUSE</code> if a location type is not specified when a merchant creates an inventory location.
     *
     * @return self
     */
    public function setLocationTypes($locationTypes)
    {
        $this->container['locationTypes'] = $locationTypes;

        return $this;
    }

    /**
     * Gets locationWebUrl
     *
     * @return string|null
     */
    public function getLocationWebUrl()
    {
        return $this->container['locationWebUrl'];
    }

    /**
     * Sets locationWebUrl
     *
     * @param string|null $locationWebUrl This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the inventory location. <br><br><b>Max length</b>: 512
     *
     * @return self
     */
    public function setLocationWebUrl($locationWebUrl)
    {
        $this->container['locationWebUrl'] = $locationWebUrl;

        return $this;
    }

    /**
     * Gets merchantLocationKey
     *
     * @return string|null
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchantLocationKey'];
    }

    /**
     * Sets merchantLocationKey
     *
     * @param string|null $merchantLocationKey The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the <strong>createInventoryLocation</strong> call. Once this value is set for an inventory location, it cannot be modified. <br><br><b>Max length</b>: 36
     *
     * @return self
     */
    public function setMerchantLocationKey($merchantLocationKey)
    {
        $this->container['merchantLocationKey'] = $merchantLocationKey;

        return $this;
    }

    /**
     * Gets merchantLocationStatus
     *
     * @return string|null
     */
    public function getMerchantLocationStatus()
    {
        return $this->container['merchantLocationStatus'];
    }

    /**
     * Sets merchantLocationStatus
     *
     * @param string|null $merchantLocationStatus This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable an inventory location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable an inventory location in enabled status. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMerchantLocationStatus($merchantLocationStatus)
    {
        $this->container['merchantLocationStatus'] = $merchantLocationStatus;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call. <br><br><b>Max length</b>: 1000
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operatingHours
     *
     * @return \ld\php\sdkEbayInventory\Model\OperatingHours[]|null
     */
    public function getOperatingHours()
    {
        return $this->container['operatingHours'];
    }

    /**
     * Sets operatingHours
     *
     * @param \ld\php\sdkEbayInventory\Model\OperatingHours[]|null $operatingHours This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the store location is open.
     *
     * @return self
     */
    public function setOperatingHours($operatingHours)
    {
        $this->container['operatingHours'] = $operatingHours;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number for an inventory location. This field will typically only be set and returned for store locations. <br><br><b>Max length</b>: 36
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets specialHours
     *
     * @return \ld\php\sdkEbayInventory\Model\SpecialHours[]|null
     */
    public function getSpecialHours()
    {
        return $this->container['specialHours'];
    }

    /**
     * Sets specialHours
     *
     * @param \ld\php\sdkEbayInventory\Model\SpecialHours[]|null $specialHours This container shows the special operating hours for a store location on a specific date or dates.
     *
     * @return self
     */
    public function setSpecialHours($specialHours)
    {
        $this->container['specialHours'] = $specialHours;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


