<?php
/**
 * ListingDetails
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
 * ListingDetails Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;listing&lt;/strong&gt; container in the &lt;strong&gt;getOffer&lt;/strong&gt; and &lt;strong&gt;getOffers&lt;/strong&gt; calls to provide the eBay listing ID, the listing status, and quantity sold for the offer. The &lt;strong&gt;listing&lt;/strong&gt; container is only returned for published offers, and is not returned for unpublished offers.
 * @package  ld\php\sdkEbayInventory
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListingDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'listingId' => 'string',
        'listingStatus' => 'string',
        'soldQuantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'listingId' => null,
        'listingStatus' => null,
        'soldQuantity' => 'int32'
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
        'listingId' => 'listingId',
        'listingStatus' => 'listingStatus',
        'soldQuantity' => 'soldQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listingId' => 'setListingId',
        'listingStatus' => 'setListingStatus',
        'soldQuantity' => 'setSoldQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listingId' => 'getListingId',
        'listingStatus' => 'getListingStatus',
        'soldQuantity' => 'getSoldQuantity'
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
        $this->container['listingId'] = $data['listingId'] ?? null;
        $this->container['listingStatus'] = $data['listingStatus'] ?? null;
        $this->container['soldQuantity'] = $data['soldQuantity'] ?? null;
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
     * Gets listingId
     *
     * @return string|null
     */
    public function getListingId()
    {
        return $this->container['listingId'];
    }

    /**
     * Sets listingId
     *
     * @param string|null $listingId The unique identifier of the eBay listing that is associated with the published offer.
     *
     * @return self
     */
    public function setListingId($listingId)
    {
        $this->container['listingId'] = $listingId;

        return $this;
    }

    /**
     * Gets listingStatus
     *
     * @return string|null
     */
    public function getListingStatus()
    {
        return $this->container['listingStatus'];
    }

    /**
     * Sets listingStatus
     *
     * @param string|null $listingStatus The enumeration value returned in this field indicates the status of the listing that is associated with the published offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setListingStatus($listingStatus)
    {
        $this->container['listingStatus'] = $listingStatus;

        return $this;
    }

    /**
     * Gets soldQuantity
     *
     * @return int|null
     */
    public function getSoldQuantity()
    {
        return $this->container['soldQuantity'];
    }

    /**
     * Sets soldQuantity
     *
     * @param int|null $soldQuantity This integer value indicates the quantity of the product that has been sold for the published offer.
     *
     * @return self
     */
    public function setSoldQuantity($soldQuantity)
    {
        $this->container['soldQuantity'] = $soldQuantity;

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

